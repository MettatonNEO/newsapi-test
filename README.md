В данном задании мне удалось подключить NewsAPI, создав на оф.сайте себе ключ. Но реализовано было не всё. В данном файле я опишу, что мне удалось, а что нет. 

<b><i><u>Я очень хотел бы разобраться в этом при нашем разговоре:</u></i></b></u>

Page elements order and description:<br>
● navigation bar with:<br>
■ on the left - wep app name (whatever you want e.g. NewsSearcher, ReadingTopList);<br>
■ on the right - current date in format like Friday, January 22, 2021;<br>
<i>// данная часть получилась, дата будет меняться в зависимости от того, какой сегодня день</i><br><br>

● hero element with top 5 headlines, they must be inline;<br>
<i>// hero element создан, но мне не удалось вставить туда топ-5 новостей. Картинка находится в <b>img.rar</b>, разахривируйте его, так как гитхаб не хочет принимать папки</i><br><br>

● form for search, display rules:<br>
■ for mobile - field per row;<br>
■ for tablet and desktop - inline form.<br>
Search criteria are:<br>
■ by title and content;<br>
■ by language;<br>
■ category.<br>
<i>// есть адаптивная строка поиска, которая будет менять свой вид в зависимости от размера экрана, с поиском по критериям не удалось разобраться. Он должен быть в виде тэгов, радио-кнопок или быть на полях, как, к примеру, на Розетке при выборе товара, когда зашел в определенную категорию? В таком случае он будет ломать мою hero image. К тому же, при любой попытке найти информацию в интернете, меня поиски приводили к поиску по фильтрам, где отображаются только те варианты, где есть введенное в строку поиска слово</i><br><br>

● section with articles wich is updated according to given filter, grid rules:<br>
■ for small screens article per row;<br>
■ for tablet and desktop - three article per row.<br>
Each article is represented by card with:<br>
● it’s image (if there is no image use any default);<br>
● title which links original source so user could actualy read it;<br>
● publish date in format dd-mm-YYYY <br>
<i>// удалось вывести список новостей на страницу (файл news.json), но не удалось адаптировать его под разные экраны, а также дата публикации будет меняться в зависимости от того, какой сегодня день</i><br><br>

Также при установке данного API я столкнулся с такой проблемой. На NodeJS появлялись ошибки, описанные в файле <b>newsapi installation log</b>. Это имеет отношение к не совсем корректному отображению новостей на странице?
