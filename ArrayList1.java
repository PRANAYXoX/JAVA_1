/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package arraylist;

/**
 *
 * @author admin
 */
import java.util.ArrayList;
import java.util.*;
public class ArrayList1 {
    static public void main(String[] arr)
    {
        ArrayList ar=new ArrayList();//non generic arraylist
        ar.add(5);
        ar.add(23.66);
        ar.add("ARRAY");
        Scanner s=new Scanner(System.in);
        char c,d;
        System.out.print("ENTER ANY VALUE:");         
        c=s.next().charAt(0);
        ar.add(c);
        System.out.print("\nSIZE OF THE ARRAY LIST:"+ar.size());
        System.out.print("\nELEMENTS OF THE ARRAYLIST:-\n");
        for(int i=0;i<ar.size();i++)
            System.out.print("\t"+ar.get(i));
        //generic arraylist
        ArrayList<Integer> ar1=new ArrayList<Integer>();
        ar1.add(5);ar1.add(6);ar1.add(7);ar1.add(8);ar1.add(9);
         System.out.print("\nELEMENTS OF GENERIC:-\n");
        for(int i=0;i<ar1.size();i++)
            System.out.print("\t"+ar1.get(i));
         ArrayList<Integer> ar2=new ArrayList<Integer>();
        ar2.add(1);ar2.add(2);ar2.add(3);ar2.add(4);ar2.add(5);
         System.out.print("\nELEMENTS OF GENERIC2:-\n");
        for(int i=0;i<ar2.size();i++)
            System.out.print("\t"+ar2.get(i));
        ar1.retainAll(ar2);
          System.out.print("\nINTERSECTION:-\n");
        for(int i=0;i<ar1.size();i++)
            System.out.print("\t"+ar1.get(i));
    }
    
}
