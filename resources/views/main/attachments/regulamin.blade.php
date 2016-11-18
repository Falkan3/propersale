@extends('layouts.content')

@section('title', 'ProperSALE | Regulamin')

@section('content')
    <section class="regulations">
        <div class="container">
            <h1>Regulamin Serwisu Internetowego</h1>

            <p><i class="icon fa fa-download margin_small"></i>Pobierz dokument:
                <i class="icon fa fa-file-pdf-o margin_small"></i><a
                        href="{{url('documents/regulamin_serwisu_propersale.pdf')}}" target="_blank">PDF</a>
            </p>

            <hr />

            <div>
                <ol class="regulation_list">
                    <li>
                        <p>Niniejszy regulamin określa ogólne warunki i sposób świadczenia usług drogą elektroniczną
                            przez
                            WebField
                            Sp. z o.o. z siedzibą w Gdańsku, za pośrednictwem serwisu internetowego www. ProperSale.pl
                            (zwanego
                            dalej
                            „Serwisem”).</p>
                    </li>
                    <li>
                        <p>Definicje</p>
                        <ol>
                            <li>
                                <p>Użytkownik – Oznacza każdy podmiot korzystający z Serwisu, na rzecz którego
                                    Administrator Serwisu świadczą usługi.</p>
                            </li>
                            <li>
                                <p>Regulamin – oznacza regulamin świadczenia usług przez Administratora Serwisu.</p>
                            </li>
                            <li>
                                <p>Strona Internetowa Serwisu – oznacza strony internetowe, będące częścią domeny
                                    www.ProperSale.pl, pod którymi Administrator świadczy usługi i prowadzi Serwis
                                    Internetowy</p>
                            </li>
                            <li>
                                <p>
                                    Usługodawca - WebField Sp. z o.o. z siedzibą w Gdańsku (80-755), ul. Szafarnia nr
                                    11. lok. F8, NIP: 5833190889, REGON: 363241225, wpisaną do rejestru przedsiębiorców
                                    Krajowego Rejestru Sądowego prowadzonego przez Sąd Rejonowy miasta Gdańsk, 
                                    VII wydział Gospodarczy Krajowego Rejestru Sądowego pod numerem KRS 0000591826, o
                                    kapitale zakładowym w wysokości 5.000 złotych, adres e-mail: <a
                                            href="mailto:kontakt@propersale.pl?Subject=Kontakt%20z%20ProperSALE"
                                            target="_top">kontakt@propersale.pl</a>.,
                                    będącą również właścicielem Serwisu, zwaną dalej „Administratorem”.
                                </p>
                            </li>
                            <li>
                                <p>
                                    Partner – podmiot współpracujący z Administratorem Serwisu.
                                </p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Postanowienia ogólne</p>
                        <ol>
                            <li><p>Poprzez korzystanie z Serwisu, Użytkownik potwierdza, iż zapoznał się z treścią
                                    Regulaminu, akceptuje jego postanowienia i zobowiązuje się do ich
                                    przestrzegania.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu zastrzega sobie prawo do wprowadzania zmian i modyfikacji
                                    Regulaminu w dowolnym terminie, bez obowiązku informowania o tym Użytkowników.
                                    Korzystanie z serwisu jest traktowane jako akceptowanie wprowadzonych zmian.</p>
                            </li>
                            <li>
                                <p>Reklamacje będą rozpatrywane zgodnie z postanowieniami niniejszego Regulaminu.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Dostęp do Serwisu</p>
                        <ol>
                            <li>
                                <p>Korzystanie z Serwisu jest nieodpłatne.</p>
                            </li>
                            <li>
                                <p>Do korzystania z podstawowych Usług nie jest konieczna rejestracja w Serwisie.</p>
                            </li>
                            <li>
                                <p>Korzystanie przez Użytkownika z funkcjonalności Serwisu nie wymaga przeprowadzenia
                                    procesu Rejestracji.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu dokłada wszelkich starań, aby zapewnić Użytkownikom stały
                                    dostęp do Serwisu.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu nie udziela gwarancji, iż korzystanie z Serwisu będzie
                                    przebiegało bez błędów i przerw. Dodatkowo Administrator zastrzega sobie prawo do
                                    zawieszenia lub ograniczenia dostępu do Serwisu w dowolnym terminie bez
                                    wcześniejszego powiadomienia Użytkowników.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu zastrzega sobie prawo do zmiany, usuwania i dodawania
                                    informacji, treści i zawartości Serwisu bez uprzedniego informowania o ich
                                    wprowadzeniu Użytkowników.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu nie ponosi odpowiedzialności za treści i zawartość innych
                                    serwisów oraz portali, do których może zostać przekierowany Użytkownik, korzystając
                                    z linków umieszczonych w Serwisie.</p>
                            </li>
                            <li>
                                <p>Administrator dołoży starań w celu zapewnienia możliwości korzystania z Serwisu
                                    internetowego za pomocą wszystkich przeglądarek internetowych, typów urządzeń oraz
                                    połączeń internetowych, systemów operacyjnych.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Prawa i obowiązki Użytkownika</p>
                        <ol>
                            <li>
                                <p>Całkowitą i wyłączna odpowiedzialność za prawdziwość i poprawność wprowadzonych do
                                    Serwisu danych ponosi Użytkownik.</p>
                            </li>
                            <li>
                                <p>Użytkownik uprawniony jest do korzystania Serwisu w sposób zgodny z obowiązującym
                                    prawem, w poszanowaniu praw własności intelektualnej.</p>
                            </li>
                            <li>
                                <p>Zakazane jest dostarczanie przez Użytkowników treści o charakterze bezprawnym oraz
                                    wykorzystywanie przez Użytkownika Serwisu, Strony internetowej serwisu lub usług
                                    świadczonych przez Administratora, w sposób sprzeczny z prawem, dobrymi obyczajami,
                                    naruszający dobra osobiste osób trzecich lub interesy Administratora.</p>
                            </li>
                            <li>
                                <p>Użytkownicy ponoszą całkowitą odpowiedzialność za wprowadzane przez siebie treści jak
                                    i szkody powstałe w wyniku ich zachowania niezgodnego z powyższymi
                                    zastrzeżeniami.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Odpowiedzialność Administratora</p>
                        <ol>
                            <li>
                                <p>Administrator Serwisu dokłada wszelkich starań, aby dane prezentowane w
                                    serwisie ProperSale.pl były kompletne, aktualne oraz zgodne ze stanem faktycznym.
                                    Serwis nie może jednak w pełni zagwarantować, że prezentowane dane są wolne od
                                    błędów, w związku z czym nie ponosi żadnej odpowiedzialności za skutki
                                    wykorzystywania prezentowanych danych w podejmowaniu przez Użytkownika decyzji.</p>
                            </li>
                            <li>
                                <p>Dane publikowane w Serwisie mają charakter wyłącznie informacyjny i nie stanowią
                                    oferty w rozumieniu przepisów Kodeksu Cywilnego.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu nie ponosi odpowiedzialności za jakiekolwiek szkody poniesione
                                    przez Użytkowników z powodu przerwy w dostępie do Serwisu, spowodowane: działaniem
                                    siły wyższej, błędnym działaniem, awariami, w tym awariami sieci Internet, awariami
                                    sprzętu lub oprogramowania, którego właścicielem jest Użytkownik.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu przywiązuje dużą wagę do zagwarantowania bezpieczeństwa
                                    korzystania z Serwisu, ale nie gwarantuje, że Serwis będzie wolny od wirusów oraz
                                    innych elementów, które mogą być powodem szkody poniesionej przez Użytkownika.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Prawa autorskie</p>
                        <ol>
                            <li>
                                <p>Wszelkie prawa (w tym m.in. majątkowe prawa autorskie, prawa własności intelektualnej
                                    do nazwy Serwisu, domeny internetowej, Strony internetowej serwisu, logotypy,
                                    dokumenty, teksty, grafika, układ serwisu, zdjęcia) należą do Administratora Serwisu
                                    i mogą być wykorzystywane wyłącznie w sposób określony i zgodny z Regulaminem.</p>
                            </li>
                            <li>
                                <p>Kopiowanie, wykorzystywanie, rozpowszechnianie Serwisu jest zabronione. Za naruszenie
                                    praw autorskich lub praw do baz danych z Serwisu pobierana będzie opłata w wysokości
                                    co najmniej trzykrotności minimalnej opłaty licencyjnej, która wynosi: 250 000 zł
                                    rocznie, zgodnie z art. 79 ust. 1 pkt 3 lit. b) Ustawy o prawie autorskim i prawach
                                    pokrewnych. Za wykorzystywanie treści zamieszczonych w Serwisie ustala się minimalną
                                    wysokość opłaty licencyjnej na 100 zł rocznie od 1000 znaków tekstu, bez spacji,
                                    wraz z przypisami.</p>
                            </li>
                            <li>
                                <p>Wykorzystywanie danych z Serwisu w celach komercyjnych odbywać się może po uprzednim
                                    powiadomieniu o tym osoby reprezentującej Administratora serwisu.</p>
                            </li>
                            <li>
                                <p>Wykorzystywanie danych z Serwisu w celach komercyjnych wymaga każdorazowo pisemnej
                                    zgody osoby reprezentującej Administratora Serwisu.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Ochrona prywatności</p>
                        <ol>
                            <li>
                                <p>Udzielenie przez Użytkownika jakichkolwiek informacji lub przesłanie jakichkolwiek
                                    dokumentów jest całkowicie dobrowolne.</p>
                            </li>
                            <li>
                                <p>Serwis w pełni respektuje prawo do prywatności i ochrony danych osobowych jego
                                    Użytkowników. Więcej informacji na ten temat zawiera Polityka Prywatności</p>
                            </li>
                            <li>
                                <p>Jeżeli Użytkownik wyrazi zgodę Administrator Serwisu będzie kontaktował się z nim, w
                                    celu informowania o nowych funkcjach lub produktach dostępnych w Serwisie lub
                                    produktach oferowanych przez Partnerów Administratora Serwisu. Użytkownikowi
                                    przysługuje prawo do zrezygnowania z otrzymywania dodatkowych informacji w dowolnym
                                    czasie.</p>
                            </li>
                            <li>
                                <p>ProperSale.pl zastrzega, że:</p>
                                <ol>
                                    <li><p>używa mechanizmu cookies, który poprzez zapisywanie krótkich informacji
                                            tekstowych na komputerze Użytkownika pozwala na jego identyfikację, a w
                                            konsekwencji umożliwia poznanie jego zachowań, zainteresowań i potrzeb.</p>
                                    </li>
                                    <li>
                                        <p>podmioty trzecie na mocy odrębnych porozumień, mogą używać mechanizmu cookies
                                            na stronach Portalu.</p>
                                    </li>
                                </ol>
                            </li>
                            <li>
                                <p>Serwis zastrzega, że używa mechanizmu cookies, które poprzez zapisywanie krótkich
                                    informacji tekstowych na komputerze Użytkownika pozwala na jego identyfikację,
                                    określenie jego osobistych preferencji oraz podniesienia jakości oferowanych
                                    usług.</p>
                            </li>
                            <li>
                                <p>Użytkownik ma możliwość określenia warunków przechowywania lub uzyskiwania dostępu do
                                    tej informacji za pomocą ustawień oprogramowania wykorzystywanego do przeglądania
                                    serwisu.</p>
                            </li>
                            <li>
                                <p>Dane statystyczne zgromadzone przez Administratora Serwisu mogą zostać wykorzystane
                                    do wewnętrznych analiz przeprowadzanych w celu poprawy jakości usług oferowanych
                                    przez ProperSale.pl</p>
                            </li>
                            <li>
                                <p>Zasady prywatności, w tym informacje dotyczące plików cookies znajdują się na
                                    stronie Polityka cookies.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Postępowanie reklamacyjne</p>
                        <ol>
                            <li>
                                <p>Reklamacje dotyczące Usług można zgłaszać pisemnie, w formie listu poleconego, na
                                    adres Administratora Serwisu.</p>
                            </li>
                            <li>
                                <p>Zgłoszenie reklamacji powinno zawierać oznaczenie osoby zgłaszającej reklamację
                                    (imię, nazwisko, adres zamieszkania, adres e-mail) oraz opis zdarzenia będącego
                                    przyczyną reklamacji.</p>
                            </li>
                            <li>
                                <p>Użytkownik traci uprawnienie wynikające z reklamacji jeśli o ujawnionym zdarzeniu
                                    będącym podstawą reklamacji nie powiadomi Administratora Serwisu niezwłocznie po
                                    ujawnieniu, nie później jednak niż po upływie 7 dni od daty tego zdarzenia.</p>
                            </li>
                            <li>
                                <p>Informacje o wyniku postępowania reklamacyjnego będą przekazane Użytkownikowi, za
                                    pośrednictwem poczty elektronicznej, w terminie 14 dni od daty otrzymania zgłoszenia
                                    przez Administratora serwisu.</p>
                            </li>
                            <li>
                                <p>Decyzja Administratora Serwisu rozstrzygająca reklamację jest ostateczna i nie
                                    przysługuje od niej odwołanie.</p>
                            </li>
                        </ol>
                    </li>
                    <li>
                        <p>Postanowienia końcowe</p>
                        <ol>
                            <li>
                                <p>Regulamin Serwisu wchodzi w życie z dniem 01.09.2016 r.</p>
                            </li>
                            <li>
                                <p>W sprawach nieuregulowane Regulaminem mają zastosowanie przepisy Kodeksu cywilnego i
                                    innych właściwych ustaw.</p>
                            </li>
                            <li>
                                <p>Wszelkie spory mogące wyniknąć z niniejszego Regulaminu będą rozstrzygane przez Sąd
                                    powszechny właściwy dla siedziby Administratora Serwisu, a prawem właściwym dla
                                    rozstrzygania potencjalnych sporów jest prawo polskie.</p>
                            </li>
                            <li>
                                <p>Administrator Serwisu zastrzega sobie prawo zmiany niniejszego Regulaminu w każdym
                                    czasie bez podania przyczyny.</p>
                            </li>
                            <li>
                                <p>Zmiany dokonane w Regulaminie będą udostępniane w Serwisie.</p>
                            </li>
                            <li>
                                <p>Zmiany Regulaminu wchodzą w życie z dniem ich opublikowania na stronie internetowej
                                    Serwisu.</p>
                            </li>
                            <li>
                                <p>Korzystanie przez Użytkownika z Serwisu po wprowadzeniu zmian w Regulaminie jest
                                    równoznaczne z wyrażeniem akceptacji dla tych zmian.</p>
                            </li>
                        </ol>
                    </li>
                </ol>

            </div>
        </div>
    </section>
@stop
