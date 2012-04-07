import java.math.BigInteger;
object pe_16 {
	/*Question 16:
	 * What is the sum of the digits of the number 2^1000?
	 */
	def main(args: Array[String]){
	  val big_str = new BigInteger(new String("2")).pow(1000).toString().split("");
	  val len = big_str.length;
	  var sum = 0;
	  for (i <- 1 until len) {
		sum += Integer.parseInt(big_str(i));
	  }
	  println(sum);
	}

}