import java.math.BigInteger;
object pe_13_win
{
  def main(args: Array[String])
  {
    val data = io.Source.fromFile("hello.txt").mkString;
    //split string on newline, convert to big ints
    val bigint_table = data.split("\n").map(_.trim).map(new BigInteger(_))
    //apply reduce to ints => a, b
    val final_str = bigint_table.reduceLeft(_.add(_)).toString.substring(0, 10)
    
    println(final_str)
    //win.
  }
}