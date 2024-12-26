import { createRoot } from "react-dom/client";

function Footer(props) {
    const { title } = props;

    return (
        <footer>
            <div className="container-fluid bg-black pt-4 pb-4 ">
                <p className="text-center text-white mb-0">
                    <a
                        href="https://github.com/Maykon-JDS"
                        className="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover"
                        target="_blank"
                    >
                        GitHub - MaykonJDS
                    </a>
                </p>
            </div>
        </footer>
    );
}

export default Footer;
