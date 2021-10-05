public class JogoDaVelha {
    int dimencoesTabuleito;
    String[][] Tabuleiro;
   
    public JogoDaVelha(int dimencoesTabuleito) {
        this.dimencoesTabuleito = dimencoesTabuleito;
        this.Tabuleiro = new String[dimencoesTabuleito][dimencoesTabuleito];
    }
    
    public boolean realizaJogada(int linha, int coluna, String XouO) 
    {
        var isPreenchido = false;
        
        var valor = Tabuleiro[linha][coluna];

        if (valor == null)
        {
            Tabuleiro[linha][coluna] = XouO;
            isPreenchido = true;        
        }

        return isPreenchido;
    }

    public int getTamanhoTabuleiro()
    {
        return this.dimencoesTabuleito;
    }

    public boolean verificaGanhador()
    {
        var voceGanhou = false;

        //linhas
        String primeiroElemento = "";
        for (var l = 0; l < this.dimencoesTabuleito; l++)
        {
            boolean tudoIgual = true;
            for (var c = 0; c < this.dimencoesTabuleito; c++)
            {
                var valor = Tabuleiro[l][c];
                if (c == 0)
                {
                    primeiroElemento = valor;
                }
                else if (valor == null || !valor.equals(primeiroElemento))
                {
                    tudoIgual = false;
                    break;
                }
            }

            if (tudoIgual)
            {
                voceGanhou = true;
                break;            
            }
        }
        
        //Colunas
        if (!voceGanhou) {
            String primeiroElementoColunas = "";
            for (var c = 0; c < this.dimencoesTabuleito; c++)
            {
                boolean tudoIgualColunas = true;
                for (var l = 0; l < this.dimencoesTabuleito; l++)
                {
                    var valor = Tabuleiro[l][c];
                    if (l == 0)
                    {
                        primeiroElementoColunas = valor;
                    }
                    else if (valor == null || !valor.equals(primeiroElementoColunas))
                    {
                        tudoIgualColunas = false;
                        break;
                    }
                }
    
                if (tudoIgualColunas)
                {
                    voceGanhou = true;
                    break;            
                }
            }
        }

        //Diagonal1
        if (!voceGanhou) {
            String primeiroElementoDiagonal = "";
            boolean tudoIgualDiagonal = true;
            for (var l = 0; l < this.dimencoesTabuleito; l++)
            {
                var valor = Tabuleiro[l][l];
                if (l == 0)
                {
                    primeiroElementoDiagonal = valor;
                }
                else if (valor == null || !valor.equals(primeiroElementoDiagonal))
                {
                    tudoIgualDiagonal = false;
                    break;
                }

            }

            if (tudoIgualDiagonal)
            {
                voceGanhou = true;        
            }
        }

        //Diagonal2
        if (!voceGanhou) {
            String primeiroElementoDiagonal2 = "";
            boolean tudoIgualDiagonal2 = true;
            int tamanho = this.dimencoesTabuleito;
            for (var l = 0; l < this.dimencoesTabuleito; l++)
            {
                var valor = Tabuleiro[l][--tamanho];
                if (l == 0)
                {
                    primeiroElementoDiagonal2 = valor;
                }
                else if (valor == null || !valor.equals(primeiroElementoDiagonal2))
                {
                    tudoIgualDiagonal2 = false;
                    break;
                }
            }

            if (tudoIgualDiagonal2)
            {
                voceGanhou = true;       
            }
        }

        return voceGanhou;
    }

    public String toString()
    {
        var linhasTabuleiro = "";
        var tabuleiro = "";

        for (var l = 0; l < this.dimencoesTabuleito; l++)
        {
            for (var c = 0; c < this.dimencoesTabuleito; c++)
                linhasTabuleiro += Tabuleiro[l][c] + " - ";

            tabuleiro += linhasTabuleiro + "\r\n";
            linhasTabuleiro = "";
        }
        
        return tabuleiro;
    }

}
