using System;
using System.Collections.Generic;
using Xamarin.Forms;

namespace App3
{
    public partial class MainPage : ContentPage
    {
        public MainPage()
        {
            InitializeComponent();
            paisPicker.ItemsSource = new List<string>
            {
                "Argentina",
                "Bolivia",
                "Brasil",
                "Chile",
                "Colombia",
                "Ecuador",
                "Paraguay",
                "Perú",
                "Venezuela",
                "Uruguay",
            };
        }

        void OnEnviarClicked(object sender, EventArgs args)
        {
            // Datos del formulario
            string nombres = nombresEntry.Text;
            string apellidos = apellidosEntry.Text;
            DateTime fechaDeNacimiento = fechaNacimientoPicker.Date;
            string ocupacion = ocupacionEntry.Text;
            string telefono = telefonoEntry.Text;
            string email = emailEntry.Text;
            string pais = (string)paisPicker.SelectedItem;

            string nivelDeIngles = string.Empty;
            if (inglesBasicoRadio.IsChecked)
                nivelDeIngles = "Básico";
            else if (inglesIntermedioRadio.IsChecked)
                nivelDeIngles = "Intermedio";
            else if (inglesAvanzadoRadio.IsChecked)
                nivelDeIngles = "Avanzado";
            else if (inglesFluidoRadio.IsChecked)
                nivelDeIngles = "Fluido";

            List<string> lenguajesProgramacion = new List<string>();
            if (pythonCheckbox.IsChecked)
                lenguajesProgramacion.Add("Python");
            if (cPlusPlusCheckbox.IsChecked)
                lenguajesProgramacion.Add("C++");
            if (javaCheckbox.IsChecked)
                lenguajesProgramacion.Add("Java");
            if (rubyCheckbox.IsChecked)
                lenguajesProgramacion.Add("Ruby");

            string aptitudes = aptitudesEntry.Text;

            List<string> habilidades = new List<string>();
            if (htmlCheckbox.IsChecked)
                habilidades.Add("Dominio de HTML");
            if (backendCheckbox.IsChecked)
                habilidades.Add("Desarrollo de aplicaciones Backend");
            if (testingCheckbox.IsChecked)
                habilidades.Add("Habilidades para testing y debugging");
            if (responsivoCheckbox.IsChecked)
                habilidades.Add("Diseño responsivo");
            string perfil = perfilEditor.Text;

            var resultPage = new ResultPage(nombres, apellidos, fechaDeNacimiento, ocupacion, telefono, email, pais, nivelDeIngles, lenguajesProgramacion, aptitudes, habilidades, perfil);

            Navigation.PushAsync(resultPage);

        }
    }
}
 

