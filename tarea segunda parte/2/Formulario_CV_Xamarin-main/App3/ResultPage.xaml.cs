using System;
using System.Collections.Generic;
using Xamarin.Forms;

namespace App3
{
    public partial class ResultPage : ContentPage
    {
        public ResultPage(
            string nombres,
            string apellidos,
            DateTime fechaDeNacimiento,
            string ocupacion,
            string telefono,
            string email,
            string pais,
            string nivel,
            List<string> lenguajesProgramacion,
            string aptitudes,
            List<string> habilidades,
            string perfil
            )
        {
            InitializeComponent();

            
            resultStackLayout.Children.Add(new Label { Text = "Nombres: " + nombres });
            resultStackLayout.Children.Add(new Label { Text = "Apellidos: " + apellidos });
            resultStackLayout.Children.Add(new Label { Text = "Fecha de nacimiento: " + fechaDeNacimiento.ToString("dd/MM/yyyy") });
            resultStackLayout.Children.Add(new Label { Text = "Ocupación: " + ocupacion });
            resultStackLayout.Children.Add(new Label { Text = "Teléfono: " + telefono });
            resultStackLayout.Children.Add(new Label { Text = "Email: " + email });
            resultStackLayout.Children.Add(new Label { Text = "País: " + pais });
            resultStackLayout.Children.Add(new Label { Text = "Nivel de Inglés: " + nivelDeIngles });

            
            string lenguajes = string.Join(", ", lenguajesProgramacion);
            resultStackLayout.Children.Add(new Label { Text = "Lenguajes de programación: " + lenguajes });

            resultStackLayout.Children.Add(new Label { Text = "Aptitudes: " + aptitudes });

            
            string habilidadesConcatenadas = string.Join(", ", habilidades);
            resultStackLayout.Children.Add(new Label { Text = "Habilidades: " + habilidadesConcatenadas });

            resultStackLayout.Children.Add(new Label { Text = "Perfil: " + perfil });
        }
    }
}