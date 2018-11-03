-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 28 Paź 2018, 09:18
-- Wersja serwera: 10.1.36-MariaDB
-- Wersja PHP: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `artykuly`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `artykul`
--

CREATE TABLE `artykul` (
  `ID_Articles` int(11) NOT NULL,
  `Title` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Text_Articles` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Description` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL,
  `Autor` text CHARACTER SET utf8 COLLATE utf8_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Zrzut danych tabeli `artykul`
--

INSERT INTO `artykul` (`ID_Articles`, `Title`, `Text_Articles`, `Description`, `Autor`) VALUES
(1, 'Apple iPhone X', 'Bezramkowy smartfon z wyświetlaczem o przekątnej 5,8 cala wykonanym w technologii OLED. Co prawda, iPhone X nie ma czytnika linii papilarnych, ale w zamian zastosowano w nim Face ID, czyli technologię rozpoznawania twarzy, dzięki której wystarczy jedno spojrzenie na telefon, aby go odblokować. Dodatkowo, smartfon ma dwa aparaty 12 MP, procesor Apple A11 Bionic oraz jest odporny na pył i wodę. iPhone X wykorzystuje niespotykany do tej pory w smartfonach wyświetlacz Super Retina o przekątnej 5.8\" i rozdzielczości 1125 x 2436. Jest to pierwszy ekran wykonany w technologii OLED spełniający standardy firmy Apple. Kolory odwzorowane są możliwie naturalnie, a czerń jest tak głęboka jak to tylko możliwe dzięki kontrastowi 1 000 000:1. Wysoki poziom maksymalnej jasności sprawia, że korzystanie z iPhone’a X jest przyjemne w każdych warunkach, nawet w pełnym słońcu. Niecodzienny jest również kształt ekranu, który pokrywa niemal cały przedni panel z delikatnym wycięciem na głośnik, kamerę oraz czujniki.', 'Bezramkowy smartfon z wyświetlaczem o przekątnej 5,8 cala wykonanym w technologii OLED. Co prawda, iPhone X nie ma czytnika linii papilarnych, ale w zamian zastosowano w nim Face ID, czyli technologię rozpoznawania twarzy, dzięki której wystarczy jedno spojrzenie na telefon, aby go odblokować. Dodatkowo, smartfon ma dwa aparaty 12 MP, procesor Apple A11 Bionic oraz jest odporny na pył i wodę', 'XYZ'),
(2, 'Apple iPhone 7', 'Wodoodporny smartfon z wyświetlaczem o przekątnej 4,7 cala, który bez problemu obsłużymy jedną dłonią. iPhone 7 z optycznym stabilizatorem obrazu powinien zadowolić miłośników fotografii, nawet jeżeli zdarzy się im się robić zdjęcia przy niezbyt dobrym oświetleniu. Dzięki akumulatorowi o pojemności 1960 mAh oraz cztero­rdzeniowemu procesorowi, który ma dwa energooszczędne rdzenie, iPhone 7 umożliwia do 11 godzin ciągłej pracy. iPhone 7 radykalnie udoskonala kluczowe elementy iPhone’a. Przynosi nowe, zaawansowane aparaty do zdjęć i wideo. Największą moc i najwydajniejszą baterię w historii tego urządzenia. Głośniki stereo hipnotyzujące fantastycznym dźwiękiem. Najjaśniejszy i wyświetlający najszerszą gamę kolorów ekran. Odporność na wodę i zachlapania.1 Oraz imponujący wygląd, na który zasługuje coś tak potężnego. Oto on. iPhone 7.', 'Wodoodporny smartfon z wyświetlaczem o przekątnej 4,7 cala, który bez problemu obsłużymy jedną dłonią. iPhone 7 z optycznym stabilizatorem obrazu powinien zadowolić miłośników fotografii, nawet jeżeli zdarzy się im się robić zdjęcia przy niezbyt dobrym oświetleniu. Dzięki akumulatorowi o pojemności 1960 mAh oraz cztero­rdzeniowemu procesorowi, który ma dwa energooszczędne rdzenie, iPhone 7 umożliwia do 11 godzin ciągłej pracy.', 'XYZ'),
(3, 'Nokia 8', 'Cena w stosunku do oferowanej wydajności w przypadku tego modelu jest niewątpliwie atrakcyjna. Design, wyświetlacz i innowacyjne aparaty z funkcją nagrywania wideo w 4K to najmocniejsze strony Nokii 8. Pozostałe komponenty, takie jak szybki procesor, duża ilość pamięci operacyjnej i wewnętrznej również nie zawodzą. Nokia 8 sprosta wszystkim zadaniom.Telefon Nokia 8 jest wyposażony w system Android Oreo 8.0.0, oferujący pełną gamę usług Google, bez zbędnych dodatków. Co więcej, zapewnimy regularne aktualizacje oprogramowania, aby wachlarz funkcji i zabezpieczeń zawsze był aktualny.\r\n\r\nNielimitowane miejsce do przechowywania zdjęć w ramach usługi Zdjęcia Google\r\nUwieczniaj najpiękniejsze chwile i nie martw się o brak pamięci — dzięki usłudze Zdjęcia Google zyskasz bezpłatne, nielimitowane miejsce do przechowywania zdjęć wysokiej jakości3. Automatyczne przypisywanie zdjęciom kategorii tematycznych przyspieszy ich przeszukiwanie. Nie musisz przy tym opisywać ich znacznikami słownymi; ich porządkowanie zajmie Ci więc mniej czasu, pozostawiając go więcej na fotografowanie.\r\n\r\nGoogle Assistant, czyli podręczny pomocnik\r\nZadawaj pytania. Wydawaj polecenia. To twój własny, osobisty asystent od Google, zawsze gotów do pomocy.', 'Cena w stosunku do oferowanej wydajności w przypadku tego modelu jest niewątpliwie atrakcyjna. Design, wyświetlacz i innowacyjne aparaty z funkcją nagrywania wideo w 4K to najmocniejsze strony Nokii 8. Pozostałe komponenty, takie jak szybki procesor, duża ilość pamięci operacyjnej i wewnętrznej również nie zawodzą. Nokia 8 sprosta wszystkim zadaniom.', 'XYZ');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `artykul`
--
ALTER TABLE `artykul`
  ADD PRIMARY KEY (`ID_Articles`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `artykul`
--
ALTER TABLE `artykul`
  MODIFY `ID_Articles` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
