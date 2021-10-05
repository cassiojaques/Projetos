public class Jogador 
{
    String nome;
    int pontos;

    public Jogador(String nome)
    {
        this.nome = nome;
        this.pontos = 0;
    }

    public String getNome()
    {
        return this.nome;
    }

    public int getPontos()
    {
        return this.pontos;
    }

    public void setNome(String novoNome)
    {
        this.nome = novoNome;
    }

    public void setPontos()
    {
        this.pontos++;
    }

    public void addPonto()
    {
        this.pontos++;
    }

    public String toString()
    {
        var nomePontos = "";
        
        nomePontos += "______________________ \r\n";
        nomePontos += "Nome: " + this.nome + "\r\n";
        nomePontos += "Pontos: " + Integer.toString(this.pontos) + "\r\n";

        return nomePontos;
    }

}
