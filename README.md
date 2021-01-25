В данном задании мне удалось подключить NewsAPI, создав на оф.сайте себе ключ. Но реализовано было не всё. В данном файле я опишу, что мне удалось, а что нет. 

Я очень хотел бы разобраться в этом при нашем разговоре:

Page elements order and description:
● navigation bar with:
■ on the left - wep app name (whatever you want e.g. NewsSearcher, ReadingTopList);
■ on the right - current date in format like Friday, January 22, 2021;
// данная часть получилась, дата будет меняться в зависимости от того, какой сегодня день

● hero element with top 5 headlines, they must be inline;
// hero element создан, но мне не удалось вставить туда топ-5 новостей

● form for search, display rules:
■ for mobile - field per row;
■ for tablet and desktop - inline form.
Search criteria are:
■ by title and content;
■ by language;
■ category.
// есть адаптивная строка поиска, которая будет менять свой вид в зависимости от размера экрана, с поиском по критериям не удалось разобраться. Он должен быть в виде тэгов, радио-кнопок или быть на полях, как, к примеру, на Розетке при выборе товара, когда зашел в определенную категорию? В таком случае он будет ломать мою hero image

● section with articles wich is updated according to given filter, grid
rules:
■ for small screens article per row;
■ for tablet and desktop - three article per row.
Each article is represented by card with:
● it’s image (if there is no image use any default);
● title which links original source so user could actualy read it;
● publish date in format dd-mm-YYYY 
// удалось вывести список новостей на страницу (файл news.json), но не удалось адаптировать его под разные экраны, а также дата публикации будет меняться в зависимости от того, какой сегодня день
