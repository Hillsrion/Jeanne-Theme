import Menu from "./views/Menu";
import Loading from "./views/Loading";

const App = (function () {
    class Application {
        constructor() {

        }
        init() {
            Loading.init();
        }
    }
    let App = new Application();
    return App;
}());

App.init();