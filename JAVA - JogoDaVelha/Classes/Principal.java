import java.util.Scanner;

import javax.lang.model.util.ElementScanner6;

public class Principal {
    
    public static void main(String[] args) {

        Scanner ler = new Scanner(System.in);
        Jogador[] Jogadores = new Jogador[2];
        String nomeJogador = "";

        System.out.print("Digite o nome do Jogador 1:");
        nomeJogador = ler.next();
        Jogadores[0] = new Jogador(nomeJogador);

        System.out.print("Digite o nome do Jogador 2:");
        nomeJogador = ler.next();
        Jogadores[1] = new Jogador(nomeJogador);

        System.out.print("Digite o tamanho do tabuleiro:");
        int dimencoesTabuleito = ler.nextInt();
        var JogoDaVelha = new JogoDaVelha(dimencoesTabuleito);
        
        var venceu = false;
        var continuarJogando = true;
        var jogadorDaRodada = 0;
        var caracter = "X";
        do 
        {
            var isValido = false;
            do 
            {
                System.out.println(String.format("----%s, sua vez----", Jogadores[jogadorDaRodada].getNome()));

                System.out.print("Qual linha? ");
                var linha = ler.nextInt();
                if (linha >= JogoDaVelha.getTamanhoTabuleiro())
                {
                    System.out.println("Essa posição não existe no tabuleiro. Tente de novo.");
                    continue;
                }

                System.out.print("Qual coluna? ");
                var coluna = ler.nextInt();
                if (coluna >= JogoDaVelha.getTamanhoTabuleiro())
                {
                    System.out.println("Essa posição não existe no tabuleiro. Tente de novo.");
                    continue;
                }

                isValido = JogoDaVelha.realizaJogada(linha, coluna, caracter);

                if (!isValido) {
                    System.out.println("Local já está preenchido! Tente outro.");
                }
            }
            while (!isValido);
            
            //Imprime o tabuleiro
            System.out.println();
            System.out.println(JogoDaVelha.toString());

            venceu = JogoDaVelha.verificaGanhador();

            if (!venceu) 
            {
                System.out.println("Proximo!");            
                if(jogadorDaRodada == 0)
                {
                    jogadorDaRodada = 1;
                    caracter = "O";
                }
                else
                {
                    jogadorDaRodada = 0;
                    caracter = "X";
                }
            }
            else
            {
                System.out.println(String.format("----%s, VOCÊ VENCEU ----", Jogadores[jogadorDaRodada].getNome()));
                Jogadores[jogadorDaRodada].setPontos();

                var resposta = "";
                do
                {
                    //Reinicia tabuleiro
                    JogoDaVelha = new JogoDaVelha(dimencoesTabuleito);
                    jogadorDaRodada = 0;
                    caracter = "X";

                    System.out.println("Desejam jogar novamente??? S ou N"); 
                    resposta = ler.next();

                    if (resposta.equals("N"))
                        continuarJogando = false;
                    else if (!resposta.equals("S"))
                        System.out.println("Escolha apenas: S ou N"); 

                } while(!(resposta.equals("N") || resposta.equals("S")));
            }
        }
        while (continuarJogando);

        //Imprimir Nomes e Pontos
        for (int i = 0; i < Jogadores.length; i++) {
            System.out.println(Jogadores[i].toString());            
        }
    }
}
