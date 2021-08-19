
 package storedfun;

import java.sql.CallableStatement;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.Types;

public class Storedfun {
public static void main(String[] args)throws Exception {
    Class.forName("com.mysql.jdbc.Driver");
    Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/company","root","");
    CallableStatement cs=con.prepareCall("{?=call avgsal()}");
    cs.registerOutParameter(1,Types.INTEGER);
     cs.execute();
     System.out.print("\nAVERAGE SALARY:"+cs.getInt(1)+"\n");
     con.close();
    }
    
}
