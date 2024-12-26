function Header(props) {

    const {title} = props;

    setTimeout

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
