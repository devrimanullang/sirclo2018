package cart;

import java.util.*;
import java.io.*;

public class Cart {
    
    Map<String,Integer> cart = new HashMap<String,Integer>();
    
    void tambahProduk(String kodeProduk, int kuantitas){
        int s =  0;
        if(cart.get(kodeProduk)==null){
            cart.put(kodeProduk,kuantitas);
        }else{
            s = cart.get(kodeProduk)+ kuantitas;
            cart.replace(kodeProduk, s);
        }
        
        
    }
    
    void hapusProduk(String kodeProduk){
        if(cart.get(kodeProduk)!=null){
            cart.remove(kodeProduk);
        }
    }
    
    void tampilkanCart(){
        for (String name: cart.keySet()){
            String key =name;
            Integer value = cart.get(name);  
            System.out.println(key + " (" + value +")");
        }
    }
    
            
    public static void main(String[] args) {
        Cart keranjang = new Cart();

        keranjang.tambahProduk("Topi Putih", 2);

        keranjang.tambahProduk("Kemeja Hitam", 3);

        keranjang.tambahProduk("Sepatu Merah", 1);
        keranjang.tambahProduk("Sepatu Merah", 4);
        keranjang.tambahProduk("Sepatu Merah", 2);

        keranjang.hapusProduk("Kemeja Hitam");

        keranjang.hapusProduk("Baju Hijau");

        keranjang.tampilkanCart();
    }
    
}
