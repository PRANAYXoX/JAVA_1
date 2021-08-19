
package trial;

import java.io.ByteArrayOutputStream;
import java.io.IOException;
import java.io.PrintWriter;
import java.sql.Blob;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.PreparedStatement;
import java.sql.ResultSet;
import javax.servlet.ServletException;
import javax.servlet.http.HttpServlet;
import javax.servlet.http.HttpServletRequest;
import javax.servlet.http.HttpServletResponse;
import org.json.simple.JSONArray;
import org.json.simple.JSONObject;
import java.io.File;


public class login101 extends HttpServlet {

    
    protected void processRequest(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        response.setContentType("text/html;charset=UTF-8");
        PrintWriter out = response.getWriter();
       //out.print("LOGIN HERE");
    String un="1";//request.getParameter("k_un");
    String pass="Roosevelt-NightMoves";//request.getParameter("k_pas");
    String pas1="";
    String smp3=null;
    int u1,view;
    JSONObject json=new JSONObject();
    JSONArray array=new JSONArray();
    File outputFile=null;
    try{
        Class.forName("com.mysql.jdbc.Driver");
        Connection con=DriverManager.getConnection("jdbc:mysql://localhost:3306/sunvox","root","");
        PreparedStatement ps=con.prepareStatement("select * from alternative where id=? and name=?");
        ps.setString(1,un);
        ps.setString(2,pass);
        ResultSet rs=ps.executeQuery();
        while(rs.next())
        {
            JSONObject record=new JSONObject();
       u1=rs.getInt(1);
      record.put("db_id",u1);
        pas1=rs.getString(2);
        record.put("db_nm",pas1);
        smp3=rs.getString(3);
       record.put("db_url",smp3);
       view=rs.getInt(4);
        record.put("db_view",view);
        array.add(record);
        }
       json.put("my_data",array);
       response.getWriter().write(json.toJSONString());
    //out.print(smp3);
    }catch(Exception e){
    out.print(e);
    }
    }

    // <editor-fold defaultstate="collapsed" desc="HttpServlet methods. Click on the + sign on the left to edit the code.">
    /**
     * Handles the HTTP <code>GET</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doGet(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Handles the HTTP <code>POST</code> method.
     *
     * @param request servlet request
     * @param response servlet response
     * @throws ServletException if a servlet-specific error occurs
     * @throws IOException if an I/O error occurs
     */
    @Override
    protected void doPost(HttpServletRequest request, HttpServletResponse response)
            throws ServletException, IOException {
        processRequest(request, response);
    }

    /**
     * Returns a short description of the servlet.
     *
     * @return a String containing servlet description
     */
    @Override
    public String getServletInfo() {
        return "Short description";
    }// </editor-fold>

}
//File outputFile = File.createTempFile(pas1, "mp3",);
//outputFile=File.createTempFile(pas1,".mp3",new File("F:\\ANDROID PROJECT\\nvid19\\app\\src\\main\\res\\raw"));
//outputFile.deleteOnExit();