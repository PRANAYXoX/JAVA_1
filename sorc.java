/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package arraylist;
import java.util.ArrayList;
/**
 *
 * @author admin
 */
public class sorc {
     public static void main(String[] args) {
        // TODO code application logic here
        ArrayList<employee> el=new ArrayList<>();
        el.add(new employee("asdas","asd",1234));
         el.add(new employee("erwe","qweq",5234));
         el.forEach(employee->System.out.print(employee));
         //INDIVDUAL EXTRACTION
         System.out.print(el.get(1));
    }
    
}
