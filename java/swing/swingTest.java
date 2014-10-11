import javax.swing.*;

public class swingTest extends JApplet
{
	private JLabel lb;
	
	public void init(){
		lb = new JLabel();
		
		lb.setText("ようこそ");
		
		add(lb);
	}
}
