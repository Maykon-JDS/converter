import { createRoot } from "react-dom/client";

function Header(props) {

    const {title} = props;

    return (
        <>
            <nav className="navbar bg-black">
                <div className="container-fluid">
                    <div className="col">
                        <a href="/" style={{ textDecoration: "none" }}>
                            <h1 className="navbar-brand mb-0 h1 text-white">
                                {title}
                            </h1>
                        </a>
                    </div>
                </div>
            </nav>
        </>
    );
}

export default Header;

const domNode = document.getElementById("header-react");
const root = createRoot(domNode);
root.render(<Header title="Converter"/>);
