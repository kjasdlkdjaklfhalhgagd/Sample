import java.util.*;
import java.io.*;
import javax.servlet.*;

public class servlet1 extends HttpServlet{

	//XXXXXX途中

	public void doGet(HttpServletRequest request,
					  HttpServletResponse response)
	throws ServletExscption{
		try{
			
			response.setContentType("text/html; charset=UTF-8");


			Date dt = new Date();

			//HTML
			PrintWriter pw = response.getWritter();
			pw.println("<html>\n" +
							"<head>\n" +
								"<title>サンプル</title>\n" +
							"</head>\n" +
							"<body>\n" +
								"<center>\n" +
								"<h2>ようこそ</h2>" +
								"</center>\n" +
							"</body>\n" +
						"</html>"
			);
		}catch(Excption e){
			e.printStackTrace();
		}
	}
}