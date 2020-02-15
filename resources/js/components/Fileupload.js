import React, { Component } from "react";
import ReactDOM from "react-dom";

class Fileupload extends Component {
    onChangeHandler = event => {
        // console.log(event.target.files[0]);
        var file = event.target.files[0];
        var reader = new FileReader();
        var url = reader.readAsDataURL(file);
        reader.onloadend = function(e) {
            window.updatecontent(reader.result);
            window.updateFileList(file, reader.result);
        }.bind(this);
    };
    render() {
        return (
            <div className="image-upload float-right">
                <label htmlFor="file-input">
                    Upload <img src="/Icon.png" />
                </label>
                <input
                    id="file-input"
                    type="file"
                    onChange={this.onChangeHandler}
                />
            </div>
        );
    }
}

export default Fileupload;

if (document.getElementById("fileupload")) {
    ReactDOM.render(<Fileupload />, document.getElementById("fileupload"));
}
