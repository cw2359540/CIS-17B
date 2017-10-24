/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/* 
 * File:   Prob3Table.h
 * Author: rcc
 *
 * Created on September 19, 2017, 2:28 PM
 */

#ifndef PROB3TABLE_H
#define PROB3TABLE_H

class Prob3Table {
protected:
    int rows; //Number of rows in the table
    int cols; //Number of cols in the table
    int *rowSum; //RowSum array
    int *colSum; //ColSum array
    int *table; //Table array
    int grandTotal; //Grand total
    void calcTable(void); //Calculate all the sums
public:
    Prob3Table(char *file, int rows, int cols){
        this->rows = rows;
        this->cols = cols;
        
        //setting up some of thing you need to do ok
    } //Constructor then Destructor

    ~Prob3Table() {
        delete [] table;
        delete [] rowSum;
        delete [] colSum;
    };

    const int *getTable(void) {
        return table;
    };

    const int *getRowSum(void) {
        return rowSum;
    };

    const int *getColSum(void) {
        return colSum;
    };

    int getGrandTotal(void) {
        return grandTotal;
    };
};

#endif /* PROB3TABLE_H */

