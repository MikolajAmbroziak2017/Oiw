package com.example.demo;

import org.springframework.web.bind.annotation.GetMapping;
import org.springframework.web.bind.annotation.RequestMapping;
import org.springframework.web.bind.annotation.RestController;

@RestController
public class Hello {

    @GetMapping("/test")
    public String main2(){return "test"; }

    @GetMapping("/test2")
    public String main3(){return "testowy nie logowany"; }

    @RequestMapping("/")
    public String index() {
        return "<!DOCTYPE html>\n" +
                "<html>\n" +
                "  <head>\n" +
                "     \n" +
                "      <link href=\"styles/style.css\" rel=\"stylesheet\" type=\"text/css\">\n" +
                "    <meta charset=\"utf-8\">\n" +
                "    <title>Programowanie serwisów www</title> \n" +
                "   \n" +
                "  </head>\n" +
                "<body>\n" +
                "  <section>\n" +
                "    <a href=\"index.html\">\n" +
                "      <img src=\"image\\index_image.jpg\" alt=\"logo\">\n" +
                "    </a>  \n" +
                "  </section>\n" +
                "          \n" +
                "  <header>\n" +
                "    <nav>\n" +
                "      <ul>\n" +
                "\n" +
                "        <li>\n" +
                "          <b><a href=\"index.html\">Strona Główna</a></b>\n" +
                "        </li>\n" +
                "\n" +
                "        <li>\n" +
                "          <b><a href=\"Strona3.html\">1.  Przedstaw się</a></b>\n" +
                "        </li>\n" +
                "\n" +
                "        <li>\n" +
                "          <b><a href=\"Strona2.html\">2. Elementy blokowe, wstawione i osadzone</a></b>\n" +
                "        </li>   \n" +
                "        <li>\n" +
                "          <b><a href=\"Strona1.html\">3. Zobacz film z przysięgi</a></li></b>\n" +
                "        </li> \n" +
                "    </ul> </nav>\n" +
                "    \n" +
                "  </header>\n" +
                "\n" +
                "  <main>\n" +
                "    <iframe src=\"https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FMagda.Slozowska%2Fvideos%2F2001863563204059%2F&show_text=0&width=560\" width=\"560\" height=\"315\" style=\"border:none;overflow:hidden\" scrolling=\"no\" frameborder=\"0\" allowTransparency=\"true\" allowFullScreen=\"true\"></iframe>\n" +
                "  </main>\n" +
                "\n" +
                "  <footer>  \n" +
                "    <b><p class=\"tytul\" >Gdzie chcesz iść dalej? </p></b>\n" +
                "  </footer>\n" +
                "\n" +
                "\n" +
                "  <aside> \n" +
                "      <p class=\"linki\"><a href=\"http://google.com\">Google</a></p>\n" +
                "      <p class=\"linki\"><a href=\"https://informatyka-amw.slack.com\">Nasz wspólny slack</a></p>\n" +
                "      <p class=\"linki\"><a href=\"https://github.com/MikolajAmbroziak2017/Oiw\">mój github</a> </p>  \n" +
                "  </aside>\n" +
                "</body>\n" +
                "</html>";
    }

}