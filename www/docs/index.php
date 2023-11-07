<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Документация — ForgeCraft UI</title>

    <link rel="stylesheet" href="/css/colors.css">
    <link rel="stylesheet" href="/css/basic-styles.css">
    <link rel="stylesheet" href="/modules/ForgeCraft-UI/base-style.css">
    <link rel="stylesheet" href="/css/docs/style.css">

</head>
<body>
<?php include "./../includes/html/header.html" ?>

<main>
    <div class="modules">
        <div class="module" data-name="BaseComponent">BaseComponent</div>
        <div class="module" data-name="Dropdown">Dropdown</div>
        <div class="module" data-name="SelectableItems">SelectableItems</div>
        <div class="module" data-name="SelectList">SelectList</div>
        <div class="module" data-name="StackedPages">StackedPages</div>
        <div class="module" data-name="WindowTabs">WindowTabs</div>
    </div>
    <div class="windows">
        <div data-name="BaseComponent-content">
            <div class="class-heading">Class: BaseComponent</div>

            <div>
                <p>Класс <code>BaseComponent</code> представляет основной компонент, обеспечивающий управление
                    DOM-элементами.</p>
            </div>

            <div class="method-heading">Конструктор</div>

            <section>
                <pre><code>constructor(element: Element)</code></pre>
                <p>Создает новый экземпляр <code>BaseComponent</code> на основе указанного DOM-элемента.</p>
                <div>
                    <span class="param-name">Параметры:</span> <code>element</code> (<code>Element</code>): DOM-элемент,
                    с
                    которым будет
                    ассоциирован компонент.
                </div>
            </section>

            <div class="method-heading">Методы</div>

            <section>
                <pre><code>addClass(className: string): void</code></pre>
                <p>Добавляет указанный класс к элементу.</p>
                <div><span class="param-name">Параметры:</span> <code>className</code> (<code>string</code>): Название
                    класса для добавления.
                </div>
            </section>

            <section>
                <pre><code>removeClass(className: string): void</code></pre>
                <p>Удаляет указанный класс из элемента.</p>
                <div><span class="param-name">Параметры:</span> <code>className</code> (<code>string</code>): Название
                    класса для удаления.
                </div>
            </section>

            <section>
                <pre><code>hasClass(className: string): boolean</code></pre>
                <p>Проверяет, содержит ли элемент указанный класс.</p>
                <div><span class="param-name">Параметры:</span> <code>className</code> (<code>string</code>): Название
                    класса для
                    проверки.
                </div>
                <div><span class="param-name">Возвращает:</span> <code>boolean</code>: <code>true</code>, если элемент
                    содержит указанный
                    класс, иначе <code>false</code>.
                </div>
            </section>

            <section>
                <pre><code>get children(): HTMLCollection</code></pre>
                <p>Получает дочерние элементы текущего элемента в виде <code>HTMLCollection</code>.</p>
                <div><span class="param-name">Возвращает:</span> <code>HTMLCollection</code>: Коллекция дочерних
                    элементов.
                </div>
            </section>

            <section>
                <pre><code>get innerHTML(): string</code></pre>
                <p>Получает внутреннее HTML содержимое элемента.</p>
                <div><span class="param-name">Возвращает:</span> <code>string</code>: Внутреннее HTML содержимое
                    элемента.
                </div>
            </section>

            <section>
                <pre><code>set innerHTML(html: string): void</code></pre>
                <p>Устанавливает внутреннее HTML содержимое элемента.</p>
                <div><span class="param-name">Параметры:</span> <code>html</code> (<code>string</code>): HTML строка для
                    установки
                    внутреннего содержимого элемента.
                </div>
            </section>

            <section>
                <pre><code>appendChild(child: Element): void</code></pre>
                <p>Добавляет указанный элемент в качестве дочернего элемента к текущему элементу.</p>
                <div><span class="param-name">Параметры:</span> <code>child</code> (<code>Element</code>): Элемент,
                    который
                    будет добавлен
                    в качестве дочернего.
                </div>
            </section>

            <section>
                <pre><code>querySelector(selector: string): Element | null</code></pre>
                <p>Находит первый элемент внутри текущего элемента, соответствующий указанному селектору CSS.</p>
                <div><span class="param-name">Параметры:</span> <code>selector</code> (<code>string</code>):
                    CSS-селектор
                    для поиска
                    элемента.
                </div>
                <div><span class="param-name">Возвращает:</span> <code>Element | null</code>: Найденный элемент или
                    <code>null</code>,
                    если
                    ничего не найдено.
                </div>
            </section>

            <section>
                <pre><code>querySelectorAll(selector: string): NodeList</code></pre>
                <p>Находит все элементы внутри текущего элемента, соответствующие указанному селектору CSS.</p>
                <div><span class="param-name">Параметры:</span> <code>selector</code> (<code>string</code>):
                    CSS-селектор
                    для поиска
                    элементов.
                </div>
                <div><span class="param-name">Возвращает:</span> <code>NodeList</code>: Список найденных элементов.
                </div>

            </section>

            <section>
                <pre><code>addEventListener(type: string, listener: Function): void</code></pre>
                <p>Добавляет слушателя события к элементу.</p>
                <div><span class="param-name">Параметры:</span>
                    <ul>
                        <li><code>type</code> (<code>string</code>): Тип события.</li>
                        <li><code>listener</code> (<code>Function</code>): Функция-обработчик события.</li>
                    </ul>
                </div>
            </section>

            <section>
                <pre><code>removeEventListener(type: string, listener: Function): void</code></pre>
                <p>Удаляет слушателя события у элемента.</p>
                <div><span class="param-name">Параметры:</span>
                    <ul>
                        <li><code>type</code> (<code>string</code>): Тип события.</li>
                        <li><code>listener</code> (<code>Function</code>): Функция-обработчик события.</li>
                    </ul>
                </div>
            </section>

            <section>
                <pre><code>dispatchEvent(event: Event): void</code></pre>
                <p>Инициирует указанное событие на элементе.</p>
                <div><span class="param-name">Параметры:</span> <code>event</code> (<code>Event</code>): Объект события
                    для
                    инициации.
                </div>
            </section>

            <section>
                <pre><code>show(): void</code></pre>
                <p>Отображает элемент, устанавливая стиль <code>display</code> в значение <code>'block'</code>.</p>
            </section>

            <section>
                <pre><code>hide(): void</code></pre>
                <p>Скрывает элемент, устанавливая стиль <code>display</code> в значение <code>'none'</code>.</p>
            </section>
        </div>
        <div data-name="Dropdown-content">
            <div class="class-heading">Class: Dropdown</div>

            <div>
                <p>Класс <code>Dropdown</code> представляет выпадающий список с опциями для выбора.</p>
            </div>

            <div class="method-heading">Конструктор</div>

            <section>
                <pre><code>constructor(element: HTMLElement, options?: Object): void</code></pre>
                <p>Создает новый объект Dropdown на основе указанного DOM-элемента.</p>
                <div><span class="param-name">Параметры:</span>
                    <code>element</code> (<code>HTMLElement</code>): DOM-элемент, который будет преобразован в
                    выпадающий список.
                    <br><code>options</code> (<code>Object</code>): Настройки для управления поведением выпадающего
                    списка (по умолчанию
                    <code>{ autoClose: true, onSelect: null }</code>).
                </div>
            </section>

            <div class="method-heading">Методы</div>

            <section>
                <pre><code>open(): void</code></pre>
                <p>Открывает выпадающий список, отображая его опции.</p>
            </section>

            <section>
                <pre><code>close(): void</code></pre>
                <p>Закрывает выпадающий список, скрывая его опции.</p>
            </section>

            <section>
                <pre><code>toggle(): void</code></pre>
                <p>Переключает состояние выпадающего списка между открытым и закрытым.</p>
            </section>

            <section>
                <pre><code>selectOption(option: HTMLElement): void</code></pre>
                <p>Выбирает указанную опцию в выпадающем списке.</p>
                <div><span class="param-name">Параметры:</span>
                    <code>option</code> (<code>HTMLElement</code>): Опция, которую нужно выбрать.
                </div>
            </section>

            <section>
                <pre><code>setOptions(options: string[]): void</code></pre>
                <p>Устанавливает новый набор опций для выпадающего списка.</p>
                <div><span class="param-name">Параметры:</span>
                    <code>options</code> (<code>string[]</code>): Новый набор опций для отображения в выпадающем списке.
                </div>
            </section>

            <section>
                <pre><code>get selectedOption(): string</code></pre>
                <p>Получает текущую выбранную опцию в выпадающем списке.</p>
                <div><span class="param-name">Возвращает:</span> <code>string</code>: Текущая выбранная опция.</div>
            </section>

            <div class="method-heading">События</div>

            <section>
                <pre><code>onSelect(option: string): void</code></pre>
                <p>Событие, вызываемое при выборе опции в выпадающем списке.</p>
                <div><span class="param-name">Параметры:</span>
                    <code>option</code> (<code>string</code>): Выбранная опция.
                </div>
            </section>
        </div>
        <div data-name="SelectableItems-content">
            <div class="class-heading">Class: SelectableItems</div>

            <div>
                <p>Класс <code>SelectableItems</code> предоставляет управление выбираемыми элементами в контейнере.</p>
            </div>

            <div class="property-heading">Свойства</div>

            <pre><code>multiple: boolean</code></pre>
            <p>Флаг, разрешающий выбор нескольких элементов.</p>

            <pre><code>isRequired: boolean</code></pre>
            <p>Флаг, указывающий, что выбор хотя бы одного элемента обязателен.</p>

            <pre><code>enableKeyboardNavigation: boolean</code></pre>
            <p>Флаг, разрешающий навигацию с клавиатуры.</p>

            <pre><code>confirmKey: string</code></pre>
            <p>Клавиша для подтверждения выбора элемента.</p>

            <pre><code>nextKey: string</code></pre>
            <p>Клавиша для перемещения к следующему элементу.</p>

            <pre><code>prevKey: string</code></pre>
            <p>Клавиша для перемещения к предыдущему элементу.</p>

            <div class="method-heading">Конструктор</div>

            <pre><code>constructor(element: HTMLElement, options?: Object)</code></pre>
            <p>Создает новый объект <code>SelectableItems</code> для управления выбором элементов в контейнере.</p>
            <div><span class="param-name">Параметры:</span>
                <ul>
                    <li><code>element</code> (<code>HTMLElement</code>): Контейнер с элементами.</li>
                    <li><code>options</code> (<code>Object</code>): Настройки для управления выбором элементов.
                        <ul>
                            <li><code>multiple</code> (<code>boolean</code>): Флаг, разрешающий выбор нескольких
                                элементов (по умолчанию
                                <code>false</code>).
                            </li>
                            <li><code>isRequired</code> (<code>boolean</code>): Флаг, указывающий, что выбор хотя бы
                                одного элемента
                                обязателен (по умолчанию <code>true</code>).
                            </li>
                            <li><code>enableKeyboardNavigation</code> (<code>boolean</code>): Флаг, разрешающий
                                навигацию с клавиатуры
                                (по умолчанию <code>true</code>).
                            </li>
                            <li><code>confirmKey</code> (<code>string</code>): Клавиша для подтверждения выбора элемента
                                (по умолчанию
                                <code>'Enter'</code>).
                            </li>
                            <li><code>prevKey</code> (<code>string</code>): Клавиша для перемещения к предыдущему
                                элементу (по умолчанию
                                <code>'ArrowUp'</code>).
                            </li>
                            <li><code>nextKey</code> (<code>string</code>): Клавиша для перемещения к следующему
                                элементу (по умолчанию
                                <code>'ArrowDown'</code>).
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="method-heading">Методы</div>

            <pre><code>toggleItem(item: HTMLElement): void</code></pre>
            <p>Переключает состояние выбора для элемента.</p>
            <div><span class="param-name">Параметры:</span> <code>item</code> (<code>HTMLElement</code>): Элемент,
                который нужно
                выбрать или отменить выбор.
            </div>

            <pre><code>getSelectedItems(): HTMLElement[]</code></pre>
            <p>Возвращает массив выбранных элементов.</p>
            <div><span class="returns">Возвращает:</span> <code>HTMLElement[]</code> - Массив выбранных элементов.</div>

            <pre><code>setSelectedItem(indexOrElement: number|HTMLElement): void</code></pre>
            <p>Устанавливает выбранный элемент по его индексу или HTMLElement.</p>
            <div><span class="param-name">Параметры:</span> <code>indexOrElement</code> (<code>number|HTMLElement</code>):
                Индекс
                элемента или сам HTMLElement.
            </div>

            <div class="method-heading">События</div>

            <pre><code>change: Event</code></pre>
            <p>Событие, которое срабатывает при изменении выбора элементов.</p>

            <pre><code>listUpdate: Event</code></pre>
            <p>Событие, которое срабатывает при обновлении списка элементов.</p>
        </div>
        <div data-name="SelectList-content">
            <div class="class-heading">Class: SelectList</div>

            <div>
                <p>Класс <code>SelectList</code> предоставляет управление выбором элементов в выпадающем списке.</p>
            </div>

            <div class="property-heading">Свойства</div>

            <pre><code>value: string</code></pre>
            <p>Получает текущее значение выбранного элемента выпадающего списка.</p>

            <pre><code>selectedItems: HTMLElement[]</code></pre>
            <p>Возвращает массив выбранных элементов списка.</p>

            <div class="method-heading">Конструктор</div>

            <pre><code>constructor(element: HTMLSelectElement, options?: Object)</code></pre>
            <p>Создает новый объект <code>SelectList</code> для управления выбором элементов в выпадающем списке.</p>
            <div><span class="param-name">Параметры:</span>
                <ul>
                    <li><code>element</code> (<code>HTMLSelectElement</code>): Элемент <code>&lt;select&gt;</code> для
                        управления
                        выбором.
                    </li>
                    <li><code>options</code> (<code>Object</code>): Настройки для управления выбором элементов.
                        <ul>
                            <li><code>isRequired</code> (<code>boolean</code>): Флаг, указывающий, что выбор хотя бы
                                одного элемента
                                обязателен (по умолчанию <code>false</code>).
                            </li>
                            <li><code>enableKeyboardNavigation</code> (<code>boolean</code>): Флаг, разрешающий
                                навигацию с клавиатуры
                                (по умолчанию <code>true</code>).
                            </li>
                            <li><code>confirmKey</code> (<code>string</code>): Клавиша для подтверждения выбора элемента
                                (по умолчанию
                                <code>'Enter'</code>).
                            </li>
                            <li><code>prevKey</code> (<code>string</code>): Клавиша для перемещения к предыдущему
                                элементу (по умолчанию
                                <code>'ArrowUp'</code>).
                            </li>
                            <li><code>nextKey</code> (<code>string</code>): Клавиша для перемещения к следующему
                                элементу (по умолчанию
                                <code>'ArrowDown'</code>).
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="method-heading">Свойства</div>

            <pre><code>value: string</code></pre>
            <p>Получает текущее значение выбранного элемента выпадающего списка.</p>

            <pre><code>selectedItems: HTMLElement[]</code></pre>
            <p>Возвращает массив выбранных элементов списка.</p>

            <div class="method-heading">Методы</div>

            <pre><code>createSelect(): void</code></pre>
            <p>Создает визуальное представление выпадающего списка и скрывает оригинальный элемент
                <code>&lt;select&gt;</code>.</p>

            <pre><code>bindEvents(): void</code></pre>
            <p>Привязывает события к элементу <code>SelectList</code> для обработки выбора элемента.</p>

            <pre><code>initialiseActiveItems(options: Object): void</code></pre>
            <p>Инициализирует активные элементы списка в соответствии с настройками.</p>
            <div><span class="param-name">Параметры:</span> <code>options</code> (<code>Object</code>): Настройки для
                управления выбором элементов.
            </div>
        </div>
        <div data-name="StackedPages-content">
            <div class="class-heading">Class: StackedPages</div>

            <div>
                <p>Класс <code>StackedPages</code> предоставляет управление вкладками и окнами в стеке.</p>
            </div>

            <div class="property-heading">Свойства</div>

            <pre><code>enableKeyboardNavigation: boolean</code></pre>
            <p>Флаг, разрешающий навигацию с клавиатуры.</p>

            <pre><code>nextKey: string</code></pre>
            <p>Клавиша для перехода к следующему элементу.</p>

            <pre><code>prevKey: string</code></pre>
            <p>Клавиша для перехода к предыдущему элементу.</p>

            <pre><code>multiple: boolean</code></pre>
            <p>Флаг, разрешающий выбор нескольких активных элементов.</p>

            <pre><code>isRequired: boolean</code></pre>
            <p>Флаг, указывающий, что выбор активного элемента обязателен.</p>

            <pre><code>pages: HTMLElement[]</code></pre>
            <p>Массив всех страниц (дочерних элементов).</p>

            <pre><code>activeElements: HTMLElement[]</code></pre>
            <p>Массив активных элементов.</p>

            <div class="method-heading">Конструктор</div>

            <pre><code>constructor(element: HTMLElement, options?: Object)</code></pre>
            <p>Создает новый объект <code>StackedPages</code> для управления вкладками и окнами в стеке.</p>
            <div><span class="param-name">Параметры:</span>
                <ul>
                    <li><code>element</code> (<code>HTMLElement</code>): Элемент, представляющий контейнер вкладок и
                        окон.
                    </li>
                    <li><code>options</code> (<code>Object</code>): Настройки для управления поведением вкладок и окон.
                        <ul>
                            <li><code>enableKeyboardNavigation</code> (<code>boolean</code>): Флаг, разрешающий
                                навигацию с клавиатуры
                                (по умолчанию <code>true</code>).
                            </li>
                            <li><code>nextKey</code> (<code>string</code>): Клавиша для перехода к следующему элементу
                                (по умолчанию
                                <code>'ArrowRight'</code>).
                            </li>
                            <li><code>prevKey</code> (<code>string</code>): Клавиша для перехода к предыдущему элементу
                                (по умолчанию
                                <code>'ArrowLeft'</code>).
                            </li>
                            <li><code>multiple</code> (<code>boolean</code>): Флаг, разрешающий выбор нескольких
                                активных элементов (по
                                умолчанию <code>false</code>).
                            </li>
                            <li><code>isRequired</code> (<code>boolean</code>): Флаг, указывающий, что выбор активного
                                элемента обязателен
                                (по умолчанию <code>true</code>).
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <div class="method-heading">Методы</div>

            <pre><code>toggleActiveElement(indexOrName: number|string): void</code></pre>
            <p>Переключает активный элемент по индексу или значению атрибута <code>data-name</code>.</p>
            <div><span class="param-name">Параметры:</span> <code>indexOrName</code> (<code>number|string</code>):
                Индекс активного
                элемента или значение атрибута <code>data-name</code>.
            </div>

            <pre><code>addPage(content: string, name?: string|null): void</code></pre>
            <p>Добавляет новую страницу в стек вкладок.</p>
            <div><span class="param-name">Параметры:</span>
                <ul>
                    <li><code>content</code> (<code>string</code>): HTML-контент новой страницы.</li>
                    <li><code>name</code> (<code>string|null</code>): Значение имени, по которому можно обращаться для
                        новой страницы.
                    </li>
                </ul>
            </div>

            <pre><code>setPageContent(indexOrName: number|string, content: string): void</code></pre>
            <p>Устанавливает контент для страницы по индексу или имени.</p>
            <div><span class="param-name">Параметры:</span>
                <ul>
                    <li><code>indexOrName</code> (<code>number|string</code>): Индекс страницы или значение атрибута
                        <code>data-name</code>
                        страницы.
                    </li>
                    <li><code>content</code> (<code>string</code>): HTML-контент для установки.</li>
                </ul>
            </div>

            <pre><code>bindEvents(): void</code></pre>
            <p>Привязывает события к элементу <code>StackedPages</code> для обработки выбора вкладок и управления с
                клавиатуры.</p>

            <pre><code>addTabWindowClass(): void</code></pre>
            <p>Добавляет класс <code>'tab-window'</code> ко всем дочерним элементам контейнера с окнами вкладок.</p>
        </div>
        <div data-name="WindowTabs-content">
            <div class="class-heading">Class: WindowTabs</div>

            <div>
                <p>Класс <code>WindowTabs</code> предоставляет управление вкладками и окнами.</p>
            </div>

            <div class="method-heading">Конструктор</div>

            <pre><code>constructor(tabs: HTMLElement, windows: HTMLElement, options?: Object)</code></pre>
            <p>Создает новый объект <code>WindowTabs</code> для управления вкладками и окнами.</p>
            <div><span class="param-name">Параметры:</span>
                <ul>
                    <li><code>tabs</code> (<code>HTMLElement</code>): Элемент, представляющий контейнер вкладок.</li>
                    <li><code>windows</code> (<code>HTMLElement</code>): Элемент, представляющий контейнер окон.</li>
                    <li><code>options</code> (<code>Object</code>): Настройки для управления поведением вкладок и окон.
                        Опциональный параметр.
                    </li>
                </ul>
            </div>

            <div class="method-heading">Методы</div>

            <pre><code>bindEvents(): void</code></pre>
            <p>Привязывает события к элементу <code>WindowTabs</code> для обработки выбора вкладок и управления с
                клавиатуры. Приватный метод.</p>

            <div class="event-heading">События</div>

            <pre><code>changeWindow: Event</code></pre>
            <p>Событие, возникающее при изменении активного окна. Можно подписаться на это событие, чтобы узнать, что
                активное окно было изменено.</p>
        </div>
    </div>

    <div class="show-modules-btn" onclick="document.querySelector('main .modules').classList.toggle('active')">
        <i class="fa-solid fa-angle-left"></i>
        <img src="/data/img/logo-512x512.png" alt="logo">
    </div>
</main>

<script src="/modules/ForgeCraft-UI/ForgeCraft.js"></script>
<script>
    let windowTabs
</script>
<script type="module">
    import WindowTabs from "../modules/ForgeCraft-UI/components/WindowTabs.js";

    const tabs = document.querySelector('.modules')
    const windows = document.querySelector('.windows')

    windowTabs = new WindowTabs(tabs, windows)

</script>
</body>
</html>