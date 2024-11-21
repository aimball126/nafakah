import 'package:flutter/material.dart';

class HorizontalCategoryList extends StatefulWidget {
  final List<String> categories;
  final Function(int) onCategorySelected;

  const HorizontalCategoryList({
    Key? key,
    required this.categories,
    required this.onCategorySelected,
  }) : super(key: key);

  @override
  _HorizontalCategoryListState createState() => _HorizontalCategoryListState();
}

class _HorizontalCategoryListState extends State<HorizontalCategoryList> {
  int _selectedCategoryIndex = 0;

  void _onCategorySelected(int index) {
    setState(() {
      _selectedCategoryIndex = index;
    });
    widget.onCategorySelected(index);
  }

  @override
  Widget build(BuildContext context) {
    return SingleChildScrollView(
      scrollDirection: Axis.horizontal,
      child: Row(
        children: widget.categories.map((category) {
          int index = widget.categories.indexOf(category);
          return GestureDetector(
            onTap: () => _onCategorySelected(index),
            child: Padding(
              padding: const EdgeInsets.all(8.0),
              child: Container(
                        padding: EdgeInsets.symmetric(horizontal: 25.0, vertical: 10),
                        decoration: BoxDecoration(
                        color: Colors.white,
                        borderRadius: BorderRadius.circular(25.0),
                        // Adjust corner radius as desired
                        boxShadow: [
                        BoxShadow(
                        color: Colors.grey.withOpacity(0.2), // Customize shadow color
                        blurRadius: 4.0, // Adjust blur radius
                        offset: Offset(2.0, 2.0), // Customize shadow offset
                        ),
                        ],
                        ),
                        child: Text(
                        category,
                        style: TextStyle(
                        fontSize: 18.0,
                        fontWeight: FontWeight.bold,
                        color: index == _selectedCategoryIndex
                        ? Colors.deepOrange
                : Colors.green.withAlpha(950), // Customize selected/unselected colors
                        ),
                        ),
                        ),
            ),
          );
        }).toList(),
      ),
    );
  }
}


class InquiryCard extends StatelessWidget {
  final String title;
  final String description;
  final IconData iconData;
  final Color iconColor;

  const InquiryCard({
    Key? key,
    required this.title,
    required this.description,
    required this.iconData,
    required this.iconColor,
  }) : super(key: key);

  @override
  Widget build(BuildContext context) {
    return Container(
      padding: const EdgeInsets.all(25.0),
      height: 160,
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(25.0),
        boxShadow: [
          BoxShadow(
            color: Colors.grey.withOpacity(0.2),
            blurRadius: 4.0,
            offset: Offset(2, 2),
          ),
        ],
      ),
      child: Column(
        mainAxisAlignment: MainAxisAlignment.start,
        crossAxisAlignment: CrossAxisAlignment.end,
        children: [
          Row(
            mainAxisAlignment: MainAxisAlignment.end,

            textDirection: TextDirection.rtl,
            children: [
              CircleAvatar(
                backgroundColor: iconColor.withAlpha(300),
                child: Icon(
                  iconData,
                  color: Colors.green,
                ),
                radius: 30.0,
              ),
              SizedBox(width: 16.0),
              Expanded(
                child: Column(
                  crossAxisAlignment: CrossAxisAlignment.end,
                  children: [
                    Text(
                      title,
                      style: TextStyle(
                        fontSize: 18.0,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    SizedBox(height: 8.0),
                    Directionality(
                      textDirection: TextDirection.rtl,
                      child: Text(
                        description,
                        style: TextStyle(
                          fontSize: 14.0,
                        ),
                      ),
                    ),
                  ],
                ),
              ),
            ],
          ),

        ],
      ),
    );
  }
}