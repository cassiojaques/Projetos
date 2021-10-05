
import java.io.File;
import java.io.FileWriter;
import java.io.IOException;
import java.io.PrintWriter;
import java.util.Scanner;

public class PrincipalLabirinto {

    final static String nomeDoArquivoDeSaida = "saidaLabirinto.txt";
    final static String fraseSeChegarNoFim = "Existe um caminho para o labirinto.";
    final static String fraseSeNaoChegarNoFim = "Não existe um caminho para o labirinto.";

    public static void main(String[] args) 
    { 
        try 
        {
            Scanner ler = new Scanner(System.in);
            Labirinto labirinto = new Labirinto();
            
            //Buscar um aquivo com base no que foi digitado
            System.out.print("Digite o nome do Arquivo com a extensão:");
            var nomeDoArquivo = ler.next();
            ler.close();

            //Cria um arquivo TXT no diretório do mesmo aquivo que foi lido.
            File novoArquivo = new File(nomeDoArquivoDeSaida);
            FileWriter arquivoAberto = new FileWriter(novoArquivo);
            PrintWriter escreveArquivo = new PrintWriter(arquivoAberto);
    
            if (labirinto.labirinto(nomeDoArquivo)) {
                //Pega o arquivo joga dentro dele a frase: Existe um caminho para o labirinto.
                escreveArquivo.print(fraseSeChegarNoFim);
            }
            else 
            {
                //Pega o arquivo joga dentro dele a frase: Não existe um caminho para o labirinto.
                escreveArquivo.print(fraseSeNaoChegarNoFim);
            }   
            
            escreveArquivo.close();
        } 
        catch (IllegalArgumentException e) {
            System.out.println("Array vazio.");
        }
        catch (IOException e) {
            System.out.println("Erro ao escrever arquivo.");
        }
        catch (Exception e) {
            System.out.println("Erro interno.");        
        }    
    }
}
