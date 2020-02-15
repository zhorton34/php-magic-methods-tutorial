# Php Magic Methods

<table>
  <thead>
    <tr>
        <th>Lesson #</th>
        <th>Magic Method</th>
        <th>Syntax</th>
        <th>Description</th>
        <th>Tutorial Screencast</th>
    </tr>
  </thead>
  <tbody>
    <tr>
        <td>Lesson 1</td>
        <td>Construct</td>
        <td>public function __construct()</td>
        <td>The constructor of a class</td>
        <td>https://www.youtube.com/watch?v=4MLA6ssPHGA</td>
    </tr>
    <tr>
        <td>Lesson 2</td>
        <td>Destruct</td>
        <td>public function __destruct()</td>
        <td>The destructor of a class</td>
        <td>https://www.youtube.com/watch?v=f8SeAh_pZ80</td>
    </tr>
    <tr>
        <td>Lesson 3</td>
        <td>Call</td>
        <td>public function __call(string $method, array $arguments)</td>
        <td>The __call() method will be called when an undefined or inaccessible method is called.</td>
        <td>https://www.youtube.com/watch?v=LH-UCiPseP8</td>
    </tr>
    <tr>
        <td>Lesson 4</td>
        <td>Call Static</td>
        <td>public static function __callStatic(string $method, array $arguments)</td>
        <td>The __callStatic() method will be called when an undefined or inaccessible static method is called.</td>
        <td>TBD</td>
    </tr>
    <tr>
        <td>Lesson 5</td>
        <td>Get</td>
        <td>public function __get(string $property)</td>
        <td>The __get() method will be called when getting a member variable of a class.</td>
        <td>TBD</td>
    </tr>
    <tr>
        <td>Lesson 6</td>
        <td>Set</td>
        <td>public function __set(string $property)</td>
        <td>The __set() method will be called when setting a member variable of a class.</td>
        <td>TBD</td>
    </tr>
    <tr>
        <td>Lesson 7</td>
        <td>Isset</td>
        <td>public function __isset($content)</td>
        <td>The __isset() method will be called when calling isset()  or empty() for an undefined or inaccessible member.</td>
        <td>TBD</td>
    </tr>
    <tr>
        <td>Lesson 8</td>
        <td>Unset</td>
        <td>public function __unset($content)</td>
        <td>The __unset() method will be called when calling reset() for an undefined or inaccessible member.</td>
        <td>TBD</td>
    </tr>
    <tr>
        <td>Lesson 9</td>
        <td>Invoke</td>
        <td>public function __invoke()</td>
        <td>The __invoke() method will be called when trying to call an object in a way of calling function.</td>
        <td>TBD</td>
    </tr>
  </tbody>
</table>
