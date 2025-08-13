package test;
import java.awt.EventQueue;
import javax.swing.JFrame;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.border.EmptyBorder;
import javax.swing.JButton;
import java.awt.event.ActionListener;
import java.awt.event.ActionEvent;
import javax.swing.GroupLayout;
import javax.swing.GroupLayout.Alignment;
import javax.swing.LayoutStyle.ComponentPlacement;
import javax.swing.ImageIcon;


public class GUI extends JFrame {
	private int turn=1;
	private boolean found_winner=false;
	private int tictactoe[][]=new int[3][3];
	private static final long serialVersionUID = 1L;
	private JPanel contentPane;

	/**
	 * Launch the application.
	 */
	public static void main(String[] args) {
		EventQueue.invokeLater(new Runnable() {
			public void run() {
				try {
					GUI frame = new GUI();
					frame.setVisible(true);
				} catch (Exception e) {
					e.printStackTrace();
				}
			}
		});
	}
	
	public void customizebutton(JButton button) {
		button.addActionListener(new ActionListener() {@Override
            public void actionPerformed(ActionEvent e) {
				button.setEnabled(false);
				if(found_winner==false) {
				String[] matrix = button.getName().split(",");
			if(turn%2==0){
				ImageIcon iconX=new ImageIcon(GUI.class.getResource("/test/square.png"));
				button.setIcon(iconX);
				button.setDisabledIcon(iconX);
				tictactoe[Integer.parseInt(matrix[0])][Integer.parseInt(matrix[1])]=1;
				find_win("X is the winner");
			}
			else {
				ImageIcon iconY=new ImageIcon(GUI.class.getResource("/test/delete.png"));
				button.setIcon(iconY);
				button.setDisabledIcon(iconY);
				tictactoe[Integer.parseInt(matrix[0])][Integer.parseInt(matrix[1])]=2;
				find_win("O is the winner");
			}
                turn++;
				}
        }});
	}
	
	public void find_win(String winner) {
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
				  JOptionPane.showMessageDialog(contentPane,winner);
				  found_winner=true;
		              break;      
		      }
			}
	}

	/**
	 * Create the frame.
	 */
	public GUI() {
		setResizable(false);
		setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		setBounds(100, 100, 454, 475);
		contentPane = new JPanel();
		contentPane.setBorder(new EmptyBorder(5, 5, 5, 5));
		setContentPane(contentPane);
	
		JButton b00 = new JButton();
		b00.setName("0,0");
		customizebutton(b00);
		
		JButton b01 = new JButton();
		b01.setName("0,1");
		customizebutton(b01);
		
		JButton b02 = new JButton();
		b02.setName("0,2");
		customizebutton(b02);
		
		JButton b10 = new JButton();
		b10.setName("1,0");
		customizebutton(b10);
		
		JButton b11 = new JButton();
		b11.setName("1,1");
		customizebutton(b11);
		
		JButton b12 = new JButton();
		b12.setName("1,2");
		customizebutton(b12);
		
		JButton b20 = new JButton();
		b20.setName("2,0");
		customizebutton(b20);
		
		JButton b21 = new JButton();
		b21.setName("2,1");
		customizebutton(b21);
		
		JButton b22 = new JButton();
		b22.setName("2,2");
		customizebutton(b22);
		
		
		
		
		

//------------------------------------------------------------------------------------------------------------			
		GroupLayout gl_contentPane = new GroupLayout(contentPane);
		gl_contentPane.setHorizontalGroup(
			gl_contentPane.createParallelGroup(Alignment.LEADING)
				.addGroup(gl_contentPane.createSequentialGroup()
					.addContainerGap()
					.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addGroup(gl_contentPane.createSequentialGroup()
							.addGroup(gl_contentPane.createParallelGroup(Alignment.TRAILING)
								.addComponent(b00, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
								.addComponent(b10, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE))
							.addPreferredGap(ComponentPlacement.RELATED)
							.addGroup(gl_contentPane.createParallelGroup(Alignment.TRAILING)
								.addComponent(b01, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
								.addComponent(b11, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE))
							.addPreferredGap(ComponentPlacement.RELATED)
							.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
								.addComponent(b12, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
								.addComponent(b02, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)))
						.addGroup(gl_contentPane.createSequentialGroup()
							.addComponent(b20, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
							.addPreferredGap(ComponentPlacement.RELATED)
							.addComponent(b21, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
							.addPreferredGap(ComponentPlacement.RELATED)
							.addComponent(b22, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)))
					.addContainerGap(100, Short.MAX_VALUE))
		);
		gl_contentPane.setVerticalGroup(
			gl_contentPane.createParallelGroup(Alignment.LEADING)
				.addGroup(gl_contentPane.createSequentialGroup()
					.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addComponent(b00, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
						.addComponent(b02, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
						.addComponent(b01, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE))
					.addPreferredGap(ComponentPlacement.RELATED)
					.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addComponent(b11, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
						.addComponent(b12, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
						.addComponent(b10, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE))
					.addPreferredGap(ComponentPlacement.RELATED)
					.addGroup(gl_contentPane.createParallelGroup(Alignment.LEADING)
						.addComponent(b20, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
						.addComponent(b21, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE)
						.addComponent(b22, GroupLayout.PREFERRED_SIZE, 140, GroupLayout.PREFERRED_SIZE))
					.addContainerGap(100, Short.MAX_VALUE))
		);
		contentPane.setLayout(gl_contentPane);
//------------------------------------------------------------------------------------------------------------		
		
	}
}
