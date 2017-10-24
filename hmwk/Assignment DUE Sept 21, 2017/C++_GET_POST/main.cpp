/* 
 * File:   main.cpp
 * Author: Cheryllynn Walsh
 * Created on September 21, 2017
 * Purpose:  Used as C++ functions for testing
 *           the GET/POST of PHP/Javascript
 */

//System Libraries
#include <iostream>
#include <cmath>
#include <iomanip>
using namespace std;

//User Libraries
#include "SavingsFunctions.h"

//Universal Global Constants here

//Function Prototypes

//Execution Begins Here!
int main(int argc, char** argv) {
    float pv=100;   //Present Value $'s
    float intr=6/100.0f;   //Interest Rate %
    int nYears=12;  //Number of compounding periods years

    //Perform Calculation / Call the function
    //instead of just calling save have to call the class first
    Functions saveFns( pv, intr, nYears );
    //now that we have a class have to call a function from that class
    float fv1=saveFns.save1(pv,intr,nYears);
    float fv2=saveFns.save2(pv,intr,nYears);
    float fv3=saveFns.save3(pv,intr,nYears);
    float fv4=saveFns.save4(pv,intr,nYears);
    float fv5=saveFns.save5(pv,intr);
    float fv6;
    saveFns.save6(pv,intr,nYears,fv6);
    float *fv7=saveFns.save7(pv,intr,nYears+1);

    //Display the results
    cout<<"Present Value   = $"<<pv<<endl;
    cout<<"Interest Rate   =    "<<intr*100<<"%"<<endl;
    cout<<"Number of Years =   "<<nYears<<endl;
    cout<<"Future Value    = $"<<fv1<<endl;
    cout<<"Future Value    = $"<<fv2<<endl;
    cout<<"Future Value    = $"<<fv3<<endl;
    cout<<"Future Value    = $"<<fv4<<endl;
    cout<<"Future Value    = $"<<fv5<<endl;
    cout<<"Future Value    = $"<<fv6<<endl;
    display(fv7,nYears+1);
    
    //Deallocate memory
    delete []fv7;

    //Exit stage right
    return 0;
}