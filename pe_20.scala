import java.math.BigInteger;
object pe_20 {
	/*Question 20:
	 * Find the sum of the digits in the number 100!
	 */
	def main(args: Array[String]){
	  val fib_max = 100;
	  var total = new BigInteger(1+"");
	  for(i <- 1 to fib_max){
	   	 total = total.multiply(new BigInteger(i + ""))
	  }
	  val big_str = total.toString().split("");
	  val len = big_str.length;
	  var sum = 0;
	  for (i <- 1 until len) {
		sum += Integer.parseInt(big_str(i));
	  }
	  println(sum);
	}

}