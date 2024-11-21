import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';
import 'package:nafakah/Screens/profilePage.dart';

class MyHomePage extends StatefulWidget {

  @override
  _MyHomePageState createState() => _MyHomePageState();
}

class EmptyAppBar extends StatelessWidget implements PreferredSizeWidget {
  @override
  Widget build(BuildContext context) {
    return Container();
  }

  @override
  Size get preferredSize => Size(0.0, 0.0);
}

class _MyHomePageState extends State<MyHomePage> {
  int _selectedPage = 0;

  void _onItemTapped(int index) {

    setState(() {

      _selectedPage = index;

    });

  }
  @override
  Widget build(BuildContext context) {
    return Scaffold(
      primary: false,
      appBar: PreferredSize(
          preferredSize: Size.fromHeight(kToolbarHeight + 40),
          child: _customAppbar()),
      body: SingleChildScrollView(
        child:
        Directionality(
          textDirection: TextDirection.rtl,
          child: Column(
            children :
          <Widget>[
            Stack(
              children: <Widget>[
                Padding(
                  padding: const EdgeInsets.only(top: 10),
                  child: Container(
                    height: 200.0,
                    width: double.infinity,
                    color: Colors.orange,
                  ),
                ),
                Positioned(
                    bottom: 150,
                    left: -40,
                    child: Container(
                      height: 140,
                      width: 140,
                      decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(70),
                          color: Colors.yellowAccent[100]?.withOpacity(0.1)),
                    )),
                Positioned(
                    top: -120,
                    left: 100,
                    child: Container(
                      height: 300,
                      width: 300,
                      decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(150),
                          color: Colors.yellowAccent[100]?.withOpacity(0.1)),
                    )),
                Positioned(
                    top: -50,
                    left: 0,
                    child: Container(
                      height: 200,
                      width: 200,
                      decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(100),
                          color: Colors.yellowAccent[100]?.withOpacity(0.1)),
                    )),
                Positioned(
                    top: 0,
                    right: 0,
                    child: Container(
                      height: 150,
                      width: 150,
                      decoration: BoxDecoration(
                          borderRadius: BorderRadius.circular(75),
                          color: Colors.yellowAccent[100]?.withOpacity(0.1)),
                    )),
                Column(
                  crossAxisAlignment: CrossAxisAlignment.start,
                  children: <Widget>[
                    SizedBox(
                      height: 70.0,
                    ),
                    Padding(
                      padding: const EdgeInsets.fromLTRB(20.0, 0.0, 20.0, 0.0),
                      child: Row(
                        crossAxisAlignment: CrossAxisAlignment.center,
                        children: <Widget>[
                          Text(
                            "600 دل",
                            style: TextStyle(
                                fontSize: 30,

                                color: Colors.white,
                                fontWeight: FontWeight.w500),
                          ),
                          Expanded(
                            flex: 1,
                            child: Container(),
                          ),
                          ElevatedButton(
                            child: Text(
                              "دفع الأن!",
                              style: TextStyle(
                                  color: Colors.orange,
                                  fontWeight: FontWeight.w500,
                                  fontSize: 16),
                            ),
                            onPressed: () {},
                            style: ElevatedButton.styleFrom(
                              elevation: 1.0,
                              backgroundColor: Colors.white,
                            ),

                          ),
                        ],
                      ),
                    ),
                    Padding(
                      padding: const EdgeInsets.fromLTRB(20.0, 0.0, 20.0, 0.0),
                      child: Text(
                        "القيمة المستحقة تاريخ 19/11/2024",
                        style: TextStyle(
                            fontSize: 20,
                            color: Colors.white.withOpacity(0.70),
                            fontWeight: FontWeight.w500),
                      ),
                    ),
                    SizedBox(
                      height: 25,
                    ),
                    Padding(
                      padding: const EdgeInsets.fromLTRB(10, 10, 20, 10),
                      child: Container(
                        height: 100,
                        width: MediaQuery.of(context).size.width,
                        child: Material(
                          elevation: 2.0,
                          color: Colors.white,
                          borderRadius: BorderRadius.circular(5.0),
                          child: Padding(
                            padding: const EdgeInsets.only(left: 25, right: 25),
                            child: Column(
                              mainAxisAlignment: MainAxisAlignment.center,
                              crossAxisAlignment: CrossAxisAlignment.start,
                              children: <Widget>[
                                Text(
                                  'عدد الإنذارات',
                                  style: TextStyle(
                                      fontSize: 24,
                                      fontWeight: FontWeight.bold,
                                      color: Colors.black54),
                                ),
                                Row(
                                  children: <Widget>[
                                    Text(
                                      '0',
                                      style: TextStyle(
                                          fontSize: 24,
                                          fontWeight: FontWeight.bold,
                                          color: Colors.black),
                                    ),
                                    Text(
                                      ' إنذارات',
                                      style: TextStyle(
                                          fontSize: 18,
                                          fontWeight: FontWeight.bold,
                                          color: Colors.black54),
                                    )
                                  ],
                                ),
                              ],
                            ),
                          ),
                        ),
                      ),
                    )
                  ],
                ),
              ],
            ),
            getGridView()
          ],

          ),
        ),
      ),
      bottomNavigationBar: BottomNavigationBar(

        selectedItemColor: Colors.green,

        items: const [

          BottomNavigationBarItem(

            icon: Icon(Icons.home, color: Colors.orange,),

            label: 'الرئيسية',

          ),

          BottomNavigationBarItem(

            icon: Icon(Icons.person, color: Colors.orange,),

            label: 'صفحتي',

          ),

        ],

        currentIndex: _selectedPage,

        onTap: (int index) {
          if (index == 1) { // Check if "صفحتي" (profile) is tapped
            Navigator.push( // Use Navigator.push for new page navigation
              context,
              MaterialPageRoute(builder: (context) => Profile()), // Replace with your desired page
            ).then((_) => setState(() { // Update _selectedPage after navigation completes
              _selectedPage = index;
            }));
          } else {
            setState(() { // Update _selectedPage for other taps
              _selectedPage = index;
            });
          }
        },

      ),

    );
  }


  Widget getGridView() {

    return GridView.count(
      shrinkWrap: true,
      crossAxisCount: 2,
      primary: false,
      childAspectRatio: (MediaQuery
          .of(context)
          .size
          .width - 60 / 2) / 280,
      children: <Widget>[
        createTile(0,_selectedIndex,false, 'سجل المدفوعات', Colors.purple, Icons.file_open),
        createTile(1,_selectedIndex,true, 'الإنذارات', Colors.red, Icons.warning),
        createTile(2,_selectedIndex,false, 'طرق الدفع', Colors.grey, Icons.add_card_outlined),
        createTile(3,_selectedIndex,true, 'الإعدادات', Colors.grey, Icons.settings),
        createTile(4,_selectedIndex,false, 'عن المنصة', Colors.grey, Icons.info_outline_rounded),
      ],
    );
  }
  int _selectedIndex = -1;
  Widget createTile(int index,int selectedIndex,bool isEven, String title, Color color, IconData icon) {

    return Padding(
      padding: EdgeInsets.only(
          left:  isEven?10:20, right: isEven?20:10, top: 10, bottom: 10),
      child: Container(
        width: MediaQuery.of(context).size.width,
        child: GestureDetector(
          onTap: (){
            setState(() {
              _selectedIndex = index;
            });
          },
          child: Material(
            elevation: 3.0,
            color: _selectedIndex==index?Colors.orange:Colors.white,
            borderRadius: BorderRadius.circular(5.0),
            child: Padding(
              padding: const EdgeInsets.only(left: 20, right: 20, top: 20,bottom: 20),
              child: Column(
                mainAxisAlignment: MainAxisAlignment.spaceBetween,
                crossAxisAlignment: CrossAxisAlignment.start,
                children: <Widget>[
                  Icon(icon,color: _selectedIndex==index?Colors.white:color,),
                  Column(
                    crossAxisAlignment: CrossAxisAlignment.start,
                    children: <Widget>[
                      Text(
                        title,
                        style: TextStyle(
                            fontSize: 20,
                            fontWeight: FontWeight.bold,
                            color: _selectedIndex==index?Colors.white:Colors.black),
                      ),
                      Padding(
                        padding: const EdgeInsets.only(left:2.0),
                        child: Container(
                          height: 3.0,
                          width: 40,
                          decoration: BoxDecoration(
                            borderRadius: BorderRadius.circular(2.0),
                            color: _selectedIndex==index?Colors.orange:color,
                          ),
                        ),
                      )
                    ],
                  ),
                ],
              ),
            ),
          ),
        ),
      ),
    );
  }
}


Widget _customAppbar() {

  return PreferredSize(

      preferredSize: Size.fromHeight(kToolbarHeight), // Adjust height as

      // needed

      child: AppBar(

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

          IconButton(

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

        ],

      )

  );

}

