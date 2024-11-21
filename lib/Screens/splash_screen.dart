import 'package:flutter/material.dart';

class SplashScreen extends StatelessWidget {
  const SplashScreen({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      backgroundColor: Colors.white,
      body: Center(
        child: AnimatedOpacity(
          opacity: 1.0,
          duration: const Duration(seconds: 2),
          curve: Curves.easeInOut,
          child: Image.asset('assets/logo.png', width: 100, height: 100,), // Replace with your logo path
        ),
      ),
    );
  }
}