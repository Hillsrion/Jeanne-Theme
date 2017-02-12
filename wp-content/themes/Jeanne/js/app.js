import Menu from "./views/Menu";
import Loading from "./views/Loading";

const App = (function () {
    class Application {
        constructor() {

        }
        init() {
            console.log(Loading);
            Loading.init();
            Menu.init();
        }
    }
    let App = new Application();
    return App;
}());

App.init();