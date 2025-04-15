const { Client, GatewayIntentBits, ButtonBuilder, ActionRowBuilder, ButtonStyle } = require('discord.js');
const axios = require('axios');

const client = new Client({
    intents: [
        GatewayIntentBits.Guilds,
        GatewayIntentBits.GuildMessages,
        GatewayIntentBits.MessageContent,
        GatewayIntentBits.GuildMembers,
        GatewayIntentBits.DirectMessages
    ]
});

// معرف الخادم والقنوات والرول
const guildId = ""; //ايدي السيرفر
const channelIds = ["", ""]; //ايدي الرومات
const roleId = ""; //الرول الي يعطيها له البوت لما يعمل يتم قبوله
const webhookUrls = [
    "",//الويب هوك الي في رومات التقديم
    "" //الويب هوك الي في رومات التقديم
];

client.once('ready', () => {
    console.log(`✅ Logged in as ${client.user.tag}!`);
});

client.on('interactionCreate', async interaction => {
    if (!interaction.isButton()) return;

    const customId = interaction.customId;
    const discordId = customId.split('_')[1]; 

    if (customId.startsWith('accept_')) {
        try {
            const member = await interaction.guild.members.fetch(discordId);
            if (member) {
                const role = interaction.guild.roles.cache.get(roleId);
                if (role) {
                    await member.roles.add(role);
                    await interaction.reply({ content: `✅ تم قبول الطلب ومنح الرول <@&${roleId}> لـ <@${discordId}>`, ephemeral: true });

                    try {
                        await member.send(`**🎉 مبروك تم قبولك في التقديم**`);
                    } catch {
                        await interaction.followUp({ content: `⚠️ لا يمكن إرسال رسالة خاصة إلى <@${discordId}>.`, ephemeral: true });
                    }
                }
            }
        } catch {
            await interaction.reply({ content: '❌ حدث خطأ أثناء محاولة جلب العضو.', ephemeral: true });
        }
    } else if (customId.startsWith('reject_')) {
        await interaction.reply({ content: `❌ تم رفض طلب العضو <@${discordId}>`, ephemeral: true });
    }
});

client.on('messageCreate', async message => {
    if (!channelIds.includes(message.channel.id)) return;

    // ❌ حذف أي رسالة ليست من الويب هوك أو البوت
    if (!message.webhookId && message.author.id !== client.user.id) {
        await deleteMessage(message);
        return;
    }

    if (message.embeds.length === 0) {
        await deleteWebhookMessage(message);
        return;
    }

    const embed = message.embeds[0];
    const discordField = embed.fields.find(field => field.name === "ID حسابك في ديسكورد"); //لاتعدل شي

    // تحقق من وجود ID والتأكد من أنه رقم صحيح
    if (!discordField || !discordField.value || isNaN(discordField.value.trim())) {
        await deleteMessage(message);  // حذف الرسالة إذا كانت تحتوي على ID غير صالح
        return;
    }

    const discordId = discordField.value.trim();

    const acceptButton = new ButtonBuilder()
        .setCustomId(`accept_${discordId}`)
        .setLabel('✅ قبول')
        .setStyle(ButtonStyle.Success);

    const rejectButton = new ButtonBuilder()
        .setCustomId(`reject_${discordId}`)
        .setLabel('❌ رفض')
        .setStyle(ButtonStyle.Danger);

    const row = new ActionRowBuilder().addComponents(acceptButton, rejectButton);

    await message.reply({ content: "⚡ اختر أحد الخيارات:", components: [row] });
});

async function deleteMessage(message) {
    try {
        await message.delete();
        console.log(`🗑️ تم حذف رسالة غير صالحة من القناة ${message.channel.id}`);
    } catch (error) {
        console.error("❌ فشل حذف الرسالة:", error);
    }
}

async function deleteWebhookMessage(message) {
    try {
        const webhookUrl = webhookUrls.find(url => message.channel.id.includes(url.split('/')[5]));
        if (!webhookUrl) return;

        await axios.delete(`${webhookUrl}/messages/${message.id}`);
        console.log(`🗑️ تم حذف رسالة غير صالحة من القناة ${message.channel.id}`);
    } catch (error) {
        console.error("❌ فشل حذف رسالة الويب هوك:", error);
    }
}

    client.login('XXXXXXXXX'); // ضع توكن البوت هنا
