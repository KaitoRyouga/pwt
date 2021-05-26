$(document).ready(function () {

    function getMsg() {

        var username = "";
        var toUser = "";

        $.ajax({
            url: '/get-session',
            type: 'GET',
            success: function (res) {
                const result = JSON.parse(res);
                username = result.username
                toUser = result.toUser
            }
        }).then(() => {

            if (username !== toUser && toUser !== undefined) {
                $.ajax({
                    url: '/get-msg',
                    type: 'POST',
                    data: {
                        lChat: $(".lMess").length,
                        rChat: $(".mMess").length,
                        fromUser: username,
                        toUser: toUser
                    },
                    success: function (res) {

                        if (res.length !== 2) {
                            $('.chatMessages').empty();
                            const result = JSON.parse(res);
                            let mess = result[1].concat(result[0]);

                            mess.sort(function (a, b) {
                                var keyA = new Date(a.created_at),
                                    keyB = new Date(b.created_at);

                                if (keyA < keyB) return -1;
                                if (keyA > keyB) return 1;
                                return 0;
                            });

                            mess.forEach((resp) => {
                                if (resp.fromUser === username && resp.body !== "") {
                                    mess = $(`
                                        <div class="message mMess">
                                            <div class="messArea">
                                                <p id="sname">${resp.fromUser}</p>
                                                <div class="textM">${resp.body}</div>
                                            </div>
                                            <div class="prof" style="background-color: #ff7b54;">
                                                <p>${resp.fromUser}</p>
                                            </div>
                                        </div>
                                    `);
                                } else if (resp.body !== "") {
                                    mess = $(`
                                        <div class="message lMess">
                                            <div class="prof">
                                                <p>${resp.fromUser}</p>
                                            </div>
                                            <div class="messArea">
                                                <div class="textM">${resp.body}</div>
                                            </div>
                                        </div>
                                    `);
                                }

                                $("[class='chatMessages']").append(mess);
                            });
                        }
                    }
                });
            }
        })

    }

    $.ajaxSetup({ cache: false });

    setInterval(getMsg, 1000);

});