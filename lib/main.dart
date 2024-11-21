import 'package:flutter/material.dart';
import 'package:google_fonts/google_fonts.dart';
import 'package:nafakah/Screens/admin%20screens/admin_dashboard.dart';


void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {


    return MaterialApp(
      theme: ThemeData(
        fontFamily: GoogleFonts.tajawal().fontFamily,
      ),
      debugShowCheckedModeBanner: false,
      home:  AdminDashboard(),
    );
  }
}