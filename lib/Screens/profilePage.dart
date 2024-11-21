import 'package:flutter/cupertino.dart';
import 'package:flutter/material.dart';

class Profile extends StatefulWidget {
  @override
  _ProfileState createState() => _ProfileState();
}

class _ProfileState extends State<Profile> {

  int counter = 0;
  @override
  Widget build(BuildContext context) {
    return Scaffold(
        appBar: AppBar(
        leading: IconButton(
        icon: Icon(Icons.arrow_back, color: Colors.deepOrange,),
    onPressed: () {
    Navigator.pop(context);
    },
    ),
        ),
      floatingActionButton: FloatingActionButton(
        backgroundColor: Colors.transparent,
        onPressed: (){
          setState(() {
            counter = counter + 1;
          });
        },
        child: Container(
          width: 60,
          height: 60,

          child: Icon(
              Icons.mode_edit_outlined,
            color: Colors.white,
          ),
          decoration: BoxDecoration(
              shape: BoxShape.circle,
            color: Colors.deepOrange
             ),
        ),
      ),
      body: Stack(
        children: [
          Column(
            children: [
              Expanded(
                flex:3,
                child:Container(
                  width: double.infinity,
                  decoration: BoxDecoration(
                    gradient: LinearGradient(
                      colors: [Colors.deepOrange,Colors.green],
                    ),
                  ),
                  child: Column(
                      children: [
                        SizedBox(height: 50.0,),
                        CircleAvatar(
                          radius: 65.0,
                          backgroundImage: AssetImage('assets/logo.png'),
                          backgroundColor: Colors.white,
                        ),
                        SizedBox(height: 10.0,),
                        Text("أحمد أحمد",
                            style: TextStyle(
                              color:Colors.white,
                              fontSize: 20.0,
                            )),

                      ]
                  ),
                ),
              ),

              Expanded(
                flex:5,
                child: Container(
                  color: Colors.grey[200],
                  child: Center(
                      child:Card(
                          margin: EdgeInsets.fromLTRB(0.0, 40.0, 0.0, 0.0),
                          child: Container(
                              width: 420,
                              height:350.0,
                              child: Padding(
                                padding: EdgeInsets.all(10.0),
                                child: Directionality(
                                  textDirection: TextDirection.rtl,
                                  child: Column(
                                    crossAxisAlignment: CrossAxisAlignment.start,
                                    children: [
                                      Text("معلومات الحساب",
                                        style: TextStyle(
                                          fontSize: 17.0,
                                          fontWeight: FontWeight.w800,
                                        ),),
                                      Divider(color: Colors.grey[300],),
                                      Row(
                                        mainAxisAlignment: MainAxisAlignment.start,
                                        children: [
                                          Icon(
                                            Icons.folder_copy_outlined,
                                            color: Colors.grey[400],
                                            size: 35,
                                          ),
                                          SizedBox(width: 20.0,),
                                          Column(
                                            crossAxisAlignment: CrossAxisAlignment.start,
                                            children: [
                                              Text("رقم القضية",
                                                style: TextStyle(
                                                  fontSize: 15.0,
                                                ),),
                                              Text("2341",
                                                style: TextStyle(
                                                  fontSize: 12.0,
                                                  color: Colors.grey[400],
                                                ),)
                                            ],
                                          )

                                        ],
                                      ),
                                      SizedBox(height: 20.0,),
                                      Row(
                                        mainAxisAlignment: MainAxisAlignment.start,
                                        children: [
                                          Icon(
                                            Icons.file_copy_outlined,
                                            color: Colors.grey[400],
                                            size: 35,
                                          ),
                                          SizedBox(width: 20.0,),
                                          Column(
                                            crossAxisAlignment: CrossAxisAlignment.start,
                                            children: [
                                              Text("رقم الملف",
                                                style: TextStyle(
                                                  fontSize: 15.0,
                                                ),),
                                              Text("3214",
                                                style: TextStyle(
                                                  fontSize: 12.0,
                                                  color: Colors.grey[400],
                                                ),)
                                            ],
                                          )

                                        ],
                                      ),
                                      SizedBox(height: 20.0,),
                                      Row(
                                        mainAxisAlignment: MainAxisAlignment.start,
                                        children: [
                                          Icon(
                                            Icons.perm_identity,
                                            color: Colors.grey[400],
                                            size: 35,
                                          ),
                                          SizedBox(width: 20.0,),
                                          Column(
                                            crossAxisAlignment: CrossAxisAlignment.start,
                                            children: [
                                              Text("الرقم الوطني",
                                                style: TextStyle(
                                                  fontSize: 15.0,
                                                ),),
                                              Text("212333441",
                                                style: TextStyle(
                                                  fontSize: 12.0,
                                                  color: Colors.grey[400],
                                                ),)
                                            ],
                                          )

                                        ],
                                      ),
                                      SizedBox(height: 20.0,),
                                      Row(
                                        mainAxisAlignment: MainAxisAlignment.start,
                                        children: [
                                          Icon(
                                            Icons.pin_drop_outlined,
                                            color: Colors.grey[400],
                                            size: 35,
                                          ),
                                          SizedBox(width: 20.0,),
                                          Column(
                                            crossAxisAlignment: CrossAxisAlignment.start,
                                            children: [
                                              Text("العنوان",
                                                style: TextStyle(
                                                  fontSize: 15.0,
                                                ),),
                                              Text("شارع عمر المختار, طرابلس",
                                                style: TextStyle(
                                                  fontSize: 12.0,
                                                  color: Colors.grey[400],
                                                ),)
                                            ],
                                          )

                                        ],
                                      ),
                                      SizedBox(height: 20.0,),
                                      Row(
                                        mainAxisAlignment: MainAxisAlignment.start,
                                        children: [
                                          Icon(
                                            Icons.cases_outlined,
                                            color: Colors.grey[400],
                                            size: 35,
                                          ),
                                          SizedBox(width: 20.0,),
                                          Column(
                                            crossAxisAlignment: CrossAxisAlignment.start,
                                            children: [
                                              Text("المبلغ المستحق",
                                                style: TextStyle(
                                                  fontSize: 15.0,
                                                ),),
                                              Text("600 دل",
                                                style: TextStyle(
                                                  fontSize: 12.0,
                                                  color: Colors.grey[400],
                                                ),)
                                            ],
                                          )

                                        ],
                                      ),

                                    ],
                                  ),
                                ),
                              )
                          )
                      )
                  ),
                ),
              ),

            ],
          ),
          Positioned(
              top:MediaQuery.of(context).size.height*0.30,
              left: 20.0,
              right: 20.0,
              child: Card(
                  child: Padding(
                    padding:EdgeInsets.all(16.0),
                    child: Row(
                      mainAxisAlignment: MainAxisAlignment.spaceEvenly,
                      children: [
                        Container(
                            child:Directionality(
                              textDirection: TextDirection.rtl,
                              child: Column(
                                children: [
                                  Text('عدد الأطفال',
                                    style: TextStyle(
                                        color: Colors.grey[400],
                                        fontSize: 14.0
                                    ),),
                                  SizedBox(height: 5.0,),
                                  Text("2",
                                    style: TextStyle(
                                      fontSize: 15.0,
                                    ),)
                                ],
                              ),
                            )
                        ),



                        Container(
                            child:Column(
                              children: [
                                Text('تاريخ إصدار الحكم',
                                  style: TextStyle(
                                      color: Colors.grey[400],
                                      fontSize: 14.0
                                  ),),
                                SizedBox(height: 5.0,),
                                Text('2/3/2022',
                                  style: TextStyle(
                                    fontSize: 15.0,
                                  ),)
                              ],
                            )
                        ),
                      ],
                    ),
                  )
              )
          )
        ],

      ),
    );
  }
}