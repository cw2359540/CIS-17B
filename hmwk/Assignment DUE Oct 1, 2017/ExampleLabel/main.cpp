/*
 * Author:  Dr. Mark E. Lehr
 * Date:    September 7, 2016
 * Purpose:  Template for Windowed Program
 */

//System Libraries
#include <QApplication>
#include <QLabel>
#include <QString>

//User Libraries

//Global Constants

//Function Prototypes

//Execution Begins Here!
int main(int argc, char *argv[]){
    //Declare variables
    QString data("Data from your Table Here!\nFigure how to fill!");

    //Create the Window Application
    QApplication a(argc, argv);
    QLabel *label=new QLabel(data);

    //Make it visible
    label->show();

    //Exit stage right!
    return a.exec();
}
