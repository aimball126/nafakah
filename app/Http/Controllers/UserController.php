<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // Method to return the view for creating a new user
    public function create()
    {

        return view('signin'); // Sho// Return the view for creating a user
    }

    // Method to handle user creation
    public function store(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'telephone' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed', // Ensure passwords match
            'type' => 'required|integer', // Ensure type is provided and is an integer
        ]);

        // Create a new user
        User::create($request->all());

        // Redirect back with a success message
        return redirect()->back()->with('success', 'User created successfully!');
    }

    // Method to handle user login
    public function login(Request $request)
    {
        // Validate the incoming request data
        $request->validate([
            'username' => 'required|string',
            'telephone' => 'required|string',
            'password' => 'required|string',
        ]);

        // Attempt to find the user
        $user = User::where('username', $request->username)
                    ->where('telephone', $request->telephone)
                    ->first();

        // Check if user exists and password is correct
        if ($user && password_verify($request->password, $user->password)) {
            // Check if user type is 1
            if ($user->type == 1) {
                // Log the user in
                Auth::login($user);
                return redirect('/'); // Redirect to the home page after login
            } else {
                return redirect()->back()->withErrors(['type' => 'Access denied. You do not have the necessary permissions.']);
            }
        }

        return redirect()->back()->withErrors(['credentials' => 'Invalid credentials.']);
    }
}
