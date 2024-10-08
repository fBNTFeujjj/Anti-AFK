# Anti-AFK PM5

Description: The AntiAFK plugin is designed to help server administrators manage and reduce the number of AFK (Away From Keyboard) players on their PocketMine-MP servers. By tracking player activity and kicking those who are idle for too long, this plugin ensures that active players have a better experience and server resources are used efficiently.

Features:

AFK Detection: Automatically tracks player activity and determines if a player is AFK based on their movements. Customizable AFK Timeout: Configure the maximum AFK time allowed before a player is considered idle and kicked from the server. Kick Message: Customize the message displayed to players when they are kicked for being AFK. Permission-Based Bypass: Allow certain players to bypass the AFK kick using permissions. Command to Reload Config: Easily reload the plugin configuration without restarting the server using the /afkreload command. Commands:

/afkreload - Reloads the plugin configuration. Requires the antiafk.cmd.reload permission. Permissions:

antiafk.cmd.reload - Allows the use of the /afkreload command. antiafk.bypass - Allows players to bypass the AFK kick. Configuration: The plugin provides a configuration file where you can set:

afk.time - The maximum time of a player can be idle before being kicked. kick.message - The message displayed to players when they are kicked for being AFK. reload.config.message - The message displayed when the configuration is reloaded. time.zone - The timezone used for calculating idle times.

- Discord : [![Discord](https://img.shields.io/discord/1178039721667080213?label=Discord&logo=discord&color=blue)](https://discord.gg/GQAwq5uAwv)
