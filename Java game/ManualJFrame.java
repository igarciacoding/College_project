package test;
import javax.swing.*;
import java.awt.*;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;

public class ManualJFrame {
  private static JButton[][] buttons = new JButton[3][3];
  private static int turn=1;
  private static int player1,player2=0;
  private static boolean found_winner=false;
  private static int tictactoe[][]=new int[3][3];
  private static JLabel player_One=new JLabel("Player 1: 0");
  private static JLabel player_Two=new JLabel("Player 2: 0");
	//--------------------------------------------------------------------------------------------------------
	public static void main(String[] args) {
		JFrame frame = new JFrame("My Manual JFrame");
		JPanel flowLayoutPanel = new JPanel(new FlowLayout(FlowLayout.CENTER, 20, 30));
		JPanel gridLayoutPanel = new JPanel(new GridLayout(3, 3, 1, 1));
		
        frame.setSize(442, 570);
        frame.setLayout(new BorderLayout());
        frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
        frame.setResizable(false);
        flowLayoutPanel.add(player_One);
        flowLayoutPanel.add(new JButton("Start Game!"));
        flowLayoutPanel.add(player_Two);
        for (int x = 0; x < 3; x++) {
        	for (int y = 0; y < 3; y++) {
        		buttons[x][y] = new JButton();
        		buttons[x][y].setName(x+","+y);
        		check_button(buttons[x][y]);
        		gridLayoutPanel.add(buttons[x][y]);
        	}
        }
        frame.add(flowLayoutPanel, BorderLayout.NORTH);
        frame.add(gridLayoutPanel, BorderLayout.CENTER); 
        frame.setVisible(true);
	}
	//--------------------------------------------------------------------------------------------------------
	private static void check_button(JButton button) {
		button.addActionListener(new ActionListener() {@Override
         public void actionPerformed(ActionEvent e) {
			button.setEnabled(false);
			if(found_winner==false) {
			String[] matrix = button.getName().split(",");
				if(turn%2==0){
					ImageIcon iconX=new ImageIcon(GUI.class.getResource("/test/delete.png"));
					button.setIcon(iconX);
					button.setDisabledIcon(iconX);
					tictactoe[Integer.parseInt(matrix[0])][Integer.parseInt(matrix[1])]=1;
					if(find_win("O is the winner")==true) {player2++;player_Two.setText("Player 2: "+player2);}
							}
				else {
					ImageIcon iconY=new ImageIcon(GUI.class.getResource("/test/square.png"));
					button.setIcon(iconY);
					button.setDisabledIcon(iconY);
					tictactoe[Integer.parseInt(matrix[0])][Integer.parseInt(matrix[1])]=2;
					if(find_win("X is the winner")==true) {player1++;player_One.setText("Player 1: "+player1);}
							}
				turn++;
			}}});
	}
	//--------------------------------------------------------------------------------------------------------
	private static boolean find_win(String winner) {
		int find_d = 0,find_e = 0;
		for (int x = 0; x < 3; ++x) {
			int find_r = 0, find_c = 0;
			  for (int y = 0; y < 3; ++y) {
				  find_r +=               (tictactoe[x][y] == 1) ? 1 : (tictactoe[x][y] == 2) ? -1 : 0;
	              find_c +=               (tictactoe[y][x] == 1) ? 1 : (tictactoe[y][x] == 2) ? -1 : 0;
	              find_d += (x==y)     ? ((tictactoe[x][y] == 1) ? 1 : (tictactoe[x][y] == 2) ? -1 : 0) : 0;
	              find_e += (x+y==3-1) ? ((tictactoe[x][y] == 1) ? 1 : (tictactoe[x][y] == 2) ? -1 : 0) : 0;
			  }
			  if(Math.abs(find_r)==3 || Math.abs(find_c)==3 || Math.abs(find_d)==3 || Math.abs(find_e)==3){
				  JOptionPane.showMessageDialog(null, winner);
				  found_winner=true;
				  denabledAllButtons(false);
		          break;      
		      }
			}
		return found_winner;
	}
	//--------------------------------------------------------------------------------------------------------	
	private static void denabledAllButtons(boolean status) {
	    for (int i = 0; i < 3; i++) {
	        for (int j = 0; j < 3; j++) {
	            buttons[i][j].setEnabled(status);
	        }
	    }
	}
	//--------------------------------------------------------------------------------------------------------

}
