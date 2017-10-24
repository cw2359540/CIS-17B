/**********Complete Payment**************/
function CompletePayment() {
	//utility function to remove element from arrays
	function arrRemove( array, element ){
		var index = array.indexOf( element );
		if (index >= 0) {
		  array.splice( index, 1 );
		}
	}

var shippingMethod = document.getElementsByName('shipping');
