<?php

namespace Hfdp\Controller;

use Hfdp\Pattern\Command as Command;

class CommandController
{
    /**
     * Main
     */
    public function main()
    {
        echo "<b>Remote</b><br />";

        $remoteControl = new Command\RemoteControl();
        $livingRoomLight = new Command\Light("Living Room");
        $kitchenLight = new Command\Light("Kitchen");
        $ceilingFan = new Command\CeilingFan("Living Room");
        $garageDoor = new Command\GarageDoor("");
        $stereo = new Command\Stereo("Living Room");

        $livingRoomLightOn = new Command\LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new Command\LightOffCommand($livingRoomLight);
        $kitchenLightOn = new Command\LightOnCommand($kitchenLight);
        $kitchenLightOff = new Command\LightOffCommand($kitchenLight);
        $ceilingFanHigh = new Command\CeilingFanHighCommand($ceilingFan);
        $ceilingFanOff = new Command\CeilingFanOffCommand($ceilingFan);
        $garageDoorUp = new Command\GarageDoorUpCommand($garageDoor);
        $garageDoorDown = new Command\GarageDoorDownCommand($garageDoor);
        $stereoOnWithCd = new Command\StereoOnWithCdCommand($stereo);
        $stereoOff = new Command\StereoOffCommand($stereo);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);
        $remoteControl->setCommand(1, $kitchenLightOn, $kitchenLightOff);
        $remoteControl->setCommand(2, $ceilingFanHigh, $ceilingFanOff);
        $remoteControl->setCommand(3, $stereoOnWithCd, $stereoOff);

        echo $remoteControl;

        $remoteControl->onButtonWasPressed(0);
        $remoteControl->offButtonWasPressed(0);
        $remoteControl->onButtonWasPressed(1);
        $remoteControl->offButtonWasPressed(1);
        $remoteControl->onButtonWasPressed(2);
        $remoteControl->offButtonWasPressed(2);
        $remoteControl->onButtonWasPressed(3);
        $remoteControl->offButtonWasPressed(3);


        echo "<br /><br /><b>Undo Light</b><br /><br />";

        $remoteControl = new Command\RemoteControl();
        $livingRoomLight = new Command\Light("Living Room");

        $livingRoomLightOn = new Command\LightOnCommand($livingRoomLight);
        $livingRoomLightOff = new Command\LightOffCommand($livingRoomLight);

        $remoteControl->setCommand(0, $livingRoomLightOn, $livingRoomLightOff);

        $remoteControl->onButtonWasPressed(0);
        $remoteControl->offButtonWasPressed(0);
        echo $remoteControl;
        $remoteControl->undoButtonWasPressed();
        $remoteControl->offButtonWasPressed(0);
        $remoteControl->onButtonWasPressed(0);
        echo $remoteControl;
        $remoteControl->undoButtonWasPressed();


        echo "<br /><br /><b>Undo Ceiling Fan</b><br /><br />";

        $remoteControl = new Command\RemoteControl();
        $ceilingFan = new Command\CeilingFan("Living Room");

        $ceilinfFanMedium = new Command\CeilingFanMediumCommand($ceilingFan);
        $ceilinfFanHigh = new Command\CeilingFanHighCommand($ceilingFan);
        $ceilinfFanOff = new Command\CeilingFanOffCommand($ceilingFan);

        $remoteControl->setCommand(0, $ceilinfFanMedium, $ceilinfFanOff);
        $remoteControl->setCommand(1, $ceilinfFanHigh, $ceilinfFanOff);

        $remoteControl->onButtonWasPressed(0);
        $remoteControl->offButtonWasPressed(0);
        echo $remoteControl;
        $remoteControl->undoButtonWasPressed();
        $remoteControl->onButtonWasPressed(1);
        echo $remoteControl;
        $remoteControl->undoButtonWasPressed();


        echo "<br /><br /><b>Party</b><br />";

        $remoteControl = new Command\RemoteControl();

        $light = new Command\Light("Living Room");
        $tv = new Command\Tv("Living Room");
        $stereo = new Command\Stereo("Living Room");
        $hottub = new Command\Hottub();

        $lightOn = new Command\LightOnCommand($light);
        $lightOff = new Command\LightOffCommand($light);
        $tvOn = new Command\TvOnCommand($tv);
        $tvOff = new Command\TvOffCommand($tv);
        $stereoOnWithCd = new Command\StereoOnWithCdCommand($stereo);
        $stereoOff = new Command\StereoOffCommand($stereo);
        $hottubOn = new Command\HottubOnCommand($hottub);
        $hottubOff = new Command\HottubOffCommand($hottub);

        $partyOn = array($lightOn, $stereoOnWithCd, $tvOn, $hottubOn);
        $partyOff = array($lightOff, $stereoOff, $tvOff, $hottubOff);

        $partyOnMacro = new Command\MacroCommand($partyOn);
        $partyOffMacro = new Command\MacroCommand($partyOff);

        $remoteControl->setCommand(0, $partyOnMacro, $partyOffMacro);

        echo $remoteControl;
        echo "--- Pushing Macro On ---<br />";
        $remoteControl->onButtonWasPressed(0);
        echo "<br />--- Pushing Macro Off ---<br />";
        $remoteControl->offButtonWasPressed(0);
    }

}
