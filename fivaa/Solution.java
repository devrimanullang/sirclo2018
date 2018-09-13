
package solution;

public class Solution {
    
    public static void fivaa(int a){
        for(int i=0; i<a; a--){
            for(int j=0;j<2;j++){
                System.out.print(a-1);
            }
            for(int j=0;j<a;j++){
                System.out.print(a+1);
            }
            System.out.println("");            
        }
        System.out.println();
    }
    
    
    public static void main(String[] args) {
        fivaa(5);
    }
    
}
