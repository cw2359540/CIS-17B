/*
 Cheryllynn Walsh
 September 21,2017
 Savings function implemented 7 different ways

 * Make pv, intr, and nYears the private properties of the class that are initialized by a constructor.  
 * Modify the existing code to test your classes just like 
 * I created and tested the function libraries included in the original code.
 */

//The class "className" are pv, intr, and nYears.

// I just typed add "...". Is here new code.
function SaveFns() {
    this.pv;
    this.intr;;
    this.nYears;
    //Savings with a for-loop
    this.save1 = function (pv, int, n) {
        for (var year = 1; year <= n; year++) {
            pv *= (1 + int);
        }
        return pv;
    };
    //Savings with a power function
    this.save2 = function(pv, int, n) {
        return pv * Math.pow((1 + int), n);
    };
    
    //Savings with the exponential-log
    this.save3= function(pv, int, n) {
        return pv * Math.exp(n * Math.log(1 + int));
    }

    //Savings with recursion
    this.save4 = function (pv, int, n) {
        if (n <= 0)
            return pv;
        return save4(pv, int, n - 1) * (1 + int);
    }

    //Savings with a defaulted parameter
    this.save5 = function (pv, int, n = 12) {
        for (var year = 1; year <= n; year++) {
            pv *= (1 + int);
        }
        return pv;
    }

    //Savings with a reference object
    this.save6 = function (pv, int, n, fv) {
        fv.save = pv * Math.exp(n * Math.log(1 + int));
    }

    //Savings with an array
    this.save7 = function(pv, int, n) {
        //Declare an array
        var fv = new Array();
        //Calculate all the values in the array
        fv[0] = pv;
        for (var year = 1; year <= n; year++) {
            fv[year] = fv[year - 1] * (1 + int);
        }
        return fv;
    }

//Display the savings array
    function display(fv) {
        //Output the heading for our table
        document.write('<table width="200" border="1">');
        document.write("<tr><th>Years</th><th>Savings</th></tr>");
        for (var year = 0; year < fv.length; year++) {
            document.write("<tr>");
            document.write("<td>" + year + "</td>");
            var x = 1 * fv[year];
            document.write("<td>$" + x.toFixed(2) + "</td>");
            document.write("</tr>");
        }
        document.write("</table>");
    }
}