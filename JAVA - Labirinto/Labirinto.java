import java.io.BufferedReader;
import java.io.FileNotFoundException;
import java.io.FileReader;
import java.io.IOException;

public class Labirinto {
    private char[][] labirintoArray;
    private int qtdLinhas, qtdColunas;

    private char[][] carregaLabirinto(String fileName) {
        
        try 
        {
            FileReader arquivoLido = new FileReader(fileName);
            BufferedReader buffer = new BufferedReader(arquivoLido);

            String primeiraLinha = buffer.readLine();
            qtdLinhas = Integer.parseInt(primeiraLinha.replace(" ", ""));
            String segundaLinha = buffer.readLine();
            qtdColunas = Integer.parseInt(segundaLinha.replace(" ", ""));
            
            String linha = buffer.readLine();
            labirintoArray = new char[qtdLinhas][qtdColunas];

            int posicaoLinha = 0;
            while (posicaoLinha < qtdLinhas)
            {
                for (int posicaoColuna = 0; posicaoColuna < qtdColunas; posicaoColuna++)
                {
                    labirintoArray[posicaoLinha][posicaoColuna] = linha.charAt(posicaoColuna);
                }
                linha = buffer.readLine();
                posicaoLinha++;
            }

            buffer.close();
        } 
        catch (FileNotFoundException e) {
            System.out.println("O arquivo " + fileName + " não pode ser encontrado.");
        }
        catch (IOException e) {
            System.out.println("Erro na leitura do arquivo " + fileName + ".");
        }

        return labirintoArray;
    }
    
    public boolean labirinto(String fileName) throws IllegalArgumentException {

        //Verificar se o aquivo existe

        char[][] array = this.carregaLabirinto(fileName);

        if (array == null) 
            throw new IllegalArgumentException();

        return this.labirinto(array, 0, 0, false);
    }

    private boolean labirinto(char[][] array, int posicaoLinha, int posicaoColuna, boolean semSaida) 
    {
        char proximaPosicao = 'T';
        final char jaPasseiPorAqui = 'V'; 
        final char naoPodeIr = 'X'; 
        final char ganhei = 'D'; 
            
        //Tenta ir para baixo
        if (posicaoLinha < qtdLinhas - 1) {
            
            proximaPosicao = array[++posicaoLinha][posicaoColuna];

            if (proximaPosicao == ganhei) 
                return true;
            
            if (semSaida && proximaPosicao != naoPodeIr) {
                semSaida = false;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);                
            }
            else if (proximaPosicao != naoPodeIr && proximaPosicao != jaPasseiPorAqui) {
                array[posicaoLinha][posicaoColuna] = jaPasseiPorAqui;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);
            }
            
            //volta
            --posicaoLinha; 
        }

        //Tenta ir para cima
        if (posicaoLinha > 0)
        {
            proximaPosicao = array[--posicaoLinha][posicaoColuna];

            if (proximaPosicao == ganhei) 
                return true;
            
            if (semSaida && proximaPosicao != naoPodeIr) {
                semSaida = false;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);                
            }
            else if (proximaPosicao != naoPodeIr && proximaPosicao != jaPasseiPorAqui) {
                array[posicaoLinha][posicaoColuna] = jaPasseiPorAqui;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);
            }
            
            //volta
            ++posicaoLinha;
        }      
        
        //Tenta ir para frente
        if (posicaoColuna < qtdColunas - 1)
        {
            proximaPosicao = array[posicaoLinha][++posicaoColuna];

            if (proximaPosicao == ganhei) 
                return true;

            if (semSaida && proximaPosicao != naoPodeIr) {
                semSaida = false;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);                
            }
            else if (proximaPosicao != naoPodeIr && proximaPosicao != jaPasseiPorAqui) {
                array[posicaoLinha][posicaoColuna] = jaPasseiPorAqui;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);
            }

            //volta
            --posicaoColuna;
        }

        //Tenta ir para tras
        if (posicaoColuna > 0)
        {
            proximaPosicao = array[posicaoLinha][--posicaoColuna];

            if (proximaPosicao == ganhei) 
                return true;

            if (semSaida && proximaPosicao != naoPodeIr) {
                semSaida = false;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);                
            }
            else if (proximaPosicao != naoPodeIr && proximaPosicao != jaPasseiPorAqui) {
                array[posicaoLinha][posicaoColuna] = jaPasseiPorAqui;
                return this.labirinto(array, posicaoLinha, posicaoColuna, false);
            }

            //volta
            ++posicaoColuna;
        }

        if (semSaida) //Não há saída
            return false;


        //Volta à posição anterior e tenta de novo
        array[posicaoLinha][posicaoColuna] = naoPodeIr;
        return this.labirinto(array, posicaoLinha, posicaoColuna, true);
    }
}
