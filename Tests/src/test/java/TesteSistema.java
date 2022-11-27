import org.junit.jupiter.api.AfterEach;
import org.junit.jupiter.api.Assertions;
import org.junit.jupiter.api.BeforeAll;
import org.junit.jupiter.api.BeforeEach;
import org.junit.jupiter.api.Test;
import org.junit.jupiter.api.TestInstance;
import org.junit.jupiter.api.TestInstance.Lifecycle;
import org.openqa.selenium.By;
import org.openqa.selenium.WebDriver;
import org.openqa.selenium.WebElement;
import org.openqa.selenium.chrome.ChromeDriver;

@TestInstance(Lifecycle.PER_CLASS)
public class TesteSistema {

    WebDriver webdriver;

    @BeforeAll
    public void setupAll(){
        System.setProperty("webdriver.chrome.driver",
                "src/test/resources/chromedriver_win32/chromedriver.exe");
    }

    @BeforeEach
    public void setup(){
        webdriver = new ChromeDriver();
        webdriver.manage().window().maximize();
    }

    @AfterEach
    public void closeDriver(){
        webdriver.close();
    }

    @Test
    public void openCharlotteProject(){
        webdriver.get("http://charlotte-project.test/");
        Assertions.assertEquals("http://charlotte-project.test/",
                webdriver.getCurrentUrl());           
    }

    @Test
    public void tryToLogin () throws InterruptedException {
        webdriver.get("http://charlotte-project.test/");
        WebElement search = webdriver.findElement(By.id("username"));
        search.sendKeys("admin");
        Thread.sleep(1000);
        search = webdriver.findElement(By.id("password"));
        search.sendKeys("admin");
        Thread.sleep(1000);
        search.submit();
        Thread.sleep(1000);
    }

    @Test
    public void registerCoordinator () throws InterruptedException {
        webdriver.get("http://charlotte-project.test/View/public/html/admin-menu.php");
        WebElement botao = webdriver.findElement(By.id("btnNewCoord"));
        botao.click();
        Thread.sleep(1000);
        WebElement search = webdriver.findElement(By.id("name-coord"));
        search.sendKeys("Danilo");
        Thread.sleep(1000);
        search = webdriver.findElement(By.id("cpf-coord"));
        search.sendKeys("111.111.111-11");
        Thread.sleep(1000);
        search = webdriver.findElement(By.id("city-coord"));
        search.sendKeys("Olinda");
        Thread.sleep(1000);
        botao = webdriver.findElement(By.id("submit-coord"));
        botao.click();
        Thread.sleep(1000); 
    }

    @Test
    public void deleteCoordinator() throws InterruptedException {
        webdriver.get("http://charlotte-project.test/View/public/html/coordinators-table.php");
        WebElement botao = webdriver.findElement(By.id("btnDelCoord"));
        botao.click();
        Thread.sleep(1000);
        WebElement search = webdriver.findElement(By.id("id-del-coord"));
        search.sendKeys("4");
        Thread.sleep(1000);
        botao = webdriver.findElement(By.id("btn-del-coord"));
        Thread.sleep(1000);
        botao.click();

    }

}
