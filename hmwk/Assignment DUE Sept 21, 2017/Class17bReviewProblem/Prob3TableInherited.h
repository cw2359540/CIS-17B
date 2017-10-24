/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   Prob3TableInherited.h
 * Author: rcc
 *
 * Created on September 19, 2017, 2:28 PM
 */

#ifndef PROB3TABLEINHERITED_H
#define PROB3TABLEINHERITED_H

#include "Prob3Table.h"

class Prob3TableInherited : public Prob3Table {
protected:
    int *augTable; //Augmented Table with sums
public:
    //so here we tell the constructer to call the parent construstor Prob3table
    //you gotta make the code for that parts
    //have to make 3 arrays inside the prob3table constructor
    //well its not going to run right because the code isnt done yet
    Prob3TableInherited(char *file, int rows, int cols) : Prob3Table( file, rows, cols){} //Constructor

    ~Prob3TableInherited() {
        delete [] augTable;
    }; //Destructor

    const int *getAugTable(void) {
        return augTable;
    };
};

#endif /* PROB3TABLEINHERITED_H */

