/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package trial;

import java.io.FileInputStream;
import java.io.FileOutputStream;
import java.io.InputStream;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;

/**
 *
 * @author admin
 */
public class api102getfile {
     public static void main(String[] args)throws Exception {
Class.forName("com.mysql.jdbc.Driver");
Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/lob","root","");
PreparedStatement ps=con.prepareStatement("select * from blob1");

ResultSet rs=ps.executeQuery();
while(rs.next())
    {
    System.out.print(rs.getInt(1));
    System.out.print(rs.getString(2));
    FileOutputStream fos=new FileOutputStream("F:\\mp33\\s1.mp3");
    InputStream is=rs.getBinaryStream(3);
    int val=is.read();
    while(val!=-1)
    {
        fos.write(val);
        val=is.read();
    }
    System.out.print("FILE STORED");
    }
    
    
    }
    
}
