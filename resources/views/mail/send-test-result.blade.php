<body
  style="box-sizing: border-box; background-color: rgb(248, 250, 252); color: rgb(33, 37, 41); font-family: Nunito, sans-serif; font-size: 0.9rem; font-weight: 400; line-height: 1.6; margin: 0px; text-align: left;">
    <div id="app" style="box-sizing: border-box; max-width: 90%; margin: auto">
        <main
          style="box-sizing: border-box; display: block; padding-top: 0.5rem !important; padding-bottom: 0.5rem !important;">
            <h1 style="width: 100%; text-align:center;">Resultados</h1>
            <div
              style="box-sizing: border-box; flex-wrap: wrap; margin-left: -15px; margin-right: -15px; justify-content: center !important;">
                <div
                  style="box-sizing: border-box; padding-left: 15px; padding-right: 15px; position: relative; width: 100%;">
                    <table
                      style="box-sizing: border-box; border-collapse: collapse; color: rgb(33, 37, 41); margin-bottom: 1rem; width: 100%; background-color: rgb(255, 255, 255);">
                        <thead style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                                <th
                                  style="box-sizing: border-box; text-align: center; border-top: 1px solid transparent; padding: 0.75rem; vertical-align: bottom; border-bottom: 2px solid transparent; background-color: rgb(227, 52, 47) !important; font-weight: 600;">
                                    Rojo</th>
                                <th
                                  style="box-sizing: border-box; text-align: center; border-top: 1px solid transparent; padding: 0.75rem; vertical-align: bottom; border-bottom: 2px solid transparent; background-color: rgb(255, 237, 74) !important; font-weight: 600;">
                                    Amarillo</th>
                                <th
                                  style="box-sizing: border-box; text-align: center; border-top: 1px solid transparent; padding: 0.75rem; vertical-align: bottom; border-bottom: 2px solid transparent; background-color: rgb(56, 193, 114) !important; font-weight: 600;">
                                    Verde</th>
                                <th
                                  style="box-sizing: border-box; text-align: center; border-top: 1px solid transparent; padding: 0.75rem; vertical-align: bottom; border-bottom: 2px solid transparent; background-color: rgb(52, 144, 220) !important; font-weight: 600;">
                                    Azul</th>
                            </tr>
                        </thead>
                        <tbody style="box-sizing: border-box;">
                            <tr style="box-sizing: border-box;">
                                <td
                                  style="box-sizing: border-box; border-width: 1px 2px 2px; border-style: solid; border-color: transparent rgb(222, 226, 230) rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; text-align: center;">
                                    {{ $red }}%</td>
                                <td
                                  style="box-sizing: border-box; border-width: 1px 2px 2px; border-style: solid; border-color: transparent rgb(222, 226, 230) rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; text-align: center;">
                                    {{ $yellow }}%</td>
                                <td
                                  style="box-sizing: border-box; border-width: 1px 2px 2px; border-style: solid; border-color: transparent rgb(222, 226, 230) rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; text-align: center;">
                                    {{ $green }}%</td>
                                <td
                                  style="box-sizing: border-box; border-width: 1px 2px 2px; border-style: solid; border-color: transparent rgb(222, 226, 230) rgb(222, 226, 230); padding: 0.75rem; vertical-align: top; text-align: center;">
                                    {{ $blue }}%</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div
                  style="box-sizing: border-box; padding-left: 15px; padding-right: 15px; position: relative; width: 100%; text-align: center">
                    <img src="{{ $message->embed($img) }}">
                </div>
            </div>
            <div
              style="box-sizing: border-box; display: none !important; height: 100vh; left: 0px; position: fixed; top: 0px; width: 100%;">
            </div>
        </main>
    </div>
</body>
