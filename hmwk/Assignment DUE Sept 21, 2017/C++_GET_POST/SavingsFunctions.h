/* 
 * File:   main.cpp
 * Author: Cheryllynn Walsh
 * Date: September 21, 2017
 * Purpose:  Used as C++ functions for testing
 *           the GET/POST of PHP/Java-script
 */
#ifndef SAVINGSFUNCTIONS_H
#define SAVINGSFUNCTIONS_H

#include <iostream>
class Functions {
private:
    float pv;
    float intr;
    int nYears; // i think Y and y
public:
    //this class needs a constructor

    Functions(float pv, float intr, int nyears) {
        this->pv = pv;
        this->intr = intr;
        //its fine because is a member of the class and that is a member of the function all right
        this->nYears = nyears;
    }//needs those seven
    float save1( float pv, float intr, int nyears);
    float save2(float pv, float intr, int n);
    float save3(float pv, float intr, int n);
    float save4(float pv, float intr, int n);
    float save5(float pv, float intr, int n = 12);
    void save6(float pv, float intr, int n, float & );
    float *save7(float pv, float intr, int n);
}; 

float Functions::save1(float pv, float intr, int n) {
    for (int year = 1; year <= n; year++) {
        pv *= (1 + intr);
    }
    return pv;
}

//Savings with a power function

float Functions::save2(float pv, float intr, int n) {
    return pv * pow((1 + intr), n);
}

//Savings with the exponential-log

float Functions::save3(float pv, float intr, int n) {
    return pv * exp(n * log(1 + intr));
}

//Savings with recursion

float Functions::save4(float pv, float intr, int n) {
    if (n <= 0)return pv;
    return save4(pv, intr, n - 1)*(1 + intr);
}

//Savings with a defaulted parameter

float Functions::save5(float pv, float intr, int n ) {
    for (int year = 1; year <= n; year++) {
        pv *= (1 + intr);
    }
    return pv;
}

//Savings with a reference object

void Functions::save6(float pv, float intr, int n, float &fv) {
    fv = pv * exp(n * log(1 + intr));
}

//Savings with an array

float* Functions::save7(float pv, float intr, int n) {
    //Declare an array
    float *fv = new float[n];
    //Calculate all the values in the array
    fv[0] = pv;
    for (int year = 1; year <= n; year++) {
        fv[year] = fv[year - 1]*(1 + intr);
    }
    return fv;
}

//Display the savings array

void display(float *fv, int n) {
    //Output the heading for our table
    cout << endl;
    cout << fixed << setprecision(2) << showpoint;
    cout << "Years   Savings" << endl;
    for (int year = 0; year < n; year++) {
        cout << setw(5) << year;
        cout << setw(10) << fv[year] << endl;
    }
    cout << endl;
}

#endif /* SAVINGSFUNCTIONS_H */