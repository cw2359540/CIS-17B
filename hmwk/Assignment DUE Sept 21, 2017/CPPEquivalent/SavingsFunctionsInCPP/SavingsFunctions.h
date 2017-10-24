/* 
 * File:   main.cpp
 * Author: Dr. Mark E. Lehr
 * Created on September 13, 2017, 11:43 AM
 * Purpose:  Used as C++ functions for testing
 *           the GET/POST of PHP/Java-script
 */
#ifndef SAVINGSFUNCTIONS_H
#define SAVINGSFUNCTIONS_H

class Functions {
private:
    float pv;
    float intr;
    float nYears; // i think Y and y
public:
    //this class needs a constructor

    Functions(float pv, float intr, float nyears) {
        this->pv = pv;
        this->intr = intr;
        //its fine because is a member of the class and that is a member of the function all right
        this->nYears = nyears;
    }//needs those three
    float save1(pv, intr, nyears);
    //do the same for the other save functions
};


//have to have that Functions:: to say that the save function is in the Functions class oop
//then

float Functions::save1(float pv, float intr, int n) {
    for (int year = 1; year <= n; year++) {
        pv *= (1 + intr);
    }
    return pv;
}

//Savings with a power function

float save2(float pv, float intr, int n) {
    return pv * pow((1 + intr), n);
}

//Savings with the exponential-log

float save3(float pv, float intr, int n) {
    return pv * exp(n * log(1 + intr));
}

//Savings with recursion

float save4(float pv, float intr, int n) {
    if (n <= 0)return pv;
    return save4(pv, intr, n - 1)*(1 + intr);
}

//Savings with a defaulted parameter

float save5(float pv, float intr, int n = 12) {
    for (int year = 1; year <= n; year++) {
        pv *= (1 + intr);
    }
    return pv;
}

//Savings with a reference object

void save6(float pv, float intr, int n, float &fv) {
    fv = pv * exp(n * log(1 + intr));
}

//Savings with an array

float *save7(float pv, float intr, int n) {
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

