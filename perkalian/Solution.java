
package solution;

public class Solution {


   public static void perkalian(int x, int y){
       int sum = 0;
       for (int i=0;i<x;i++){
           sum +=y;
       }
       System.out.println(sum);
   }

    public static void main(String[] args) {

        perkalian(12,6);
    }

}
