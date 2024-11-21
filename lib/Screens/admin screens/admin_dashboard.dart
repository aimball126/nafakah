import 'package:flutter/material.dart';

import '../../Utilities/widgets.dart';

class AdminDashboard extends StatelessWidget {
  const AdminDashboard({super.key});

  @override
  Widget build(BuildContext context) {
    final List<String> categories = [ 'إدارة الملفات','الاستعلامات', 'الكل'];

    return  Scaffold(
      backgroundColor: Colors.white,
      appBar: PreferredSize(
          preferredSize: Size.fromHeight(kToolbarHeight + 40), // Adjust height as
          child: _customAppbar()),

      body: Padding(
        padding: EdgeInsets.symmetric(horizontal: 20),
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.center,
          mainAxisAlignment: MainAxisAlignment.start,
          children: [
            Center(
              child: HorizontalCategoryList(
              categories: categories,
              onCategorySelected: (index) {
                // Handle category selection here (optional)
                print('Selected category: ${categories[index]}');
              },
                      ),
            ),

            SizedBox(height: 50,),

            InquiryCard(
              title: 'الاستعلام عن رصيد',
              description: 'استعلم عن رصيدك وكشف حسابك.',
              iconData: Icons.account_balance_wallet,
              iconColor: Colors.green,
            ),
            SizedBox(height: 50,),
            InquiryCard(
              title: 'الملفات المتأخرة',
              description: 'قائمة النفقات اللتي لم يتم تخليصها بعد.',
              iconData: Icons.access_time_filled,
              iconColor: Colors.green,
            ),
            SizedBox(height: 50,),

            InquiryCard(
              title: 'الملفات المحالة',
              description: 'الملفات اللتي يجب إحالتهم إلى الشرطة القضائية.',
              iconData: Icons.account_balance_wallet,
              iconColor: Colors.green,
            ),
        ]
        ),
      ),
    );
  }
}
Widget _customAppbar() {

  return AppBar(

    backgroundColor: Colors.white,

    elevation: 0,

    titleSpacing: 0,

    centerTitle: true,

    leadingWidth:

    0,

    title: Image.asset(

      "assets/logo.png",

      width: 250,

      height: 150,

    ),

    actions: [

      Padding(
        padding: const EdgeInsets.symmetric(horizontal: 15),
        child: IconButton(

          onPressed: (){},

          icon: CircleAvatar(

            backgroundColor: Colors.grey[300],

            radius: 15,

            child: Icon(

              Icons.notifications_active_outlined,

              color: Colors.orange,

            ),

          ),

        ),
      ),

    ],

  );

}

